<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite\Shop;

use App\Http\Controllers\DigitalMarmalade\MarmaladeSuite\MarmaladeSuiteControllerAbstract;
use Illuminate\Http\Request;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Shop\Product;
use App\Product as ProductModel;
use App\ProductVariation;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Image\ReusableImage;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Image\CroppedReusableImage;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Image\OutputsCachedImagesTrait;
use App\Http\Resources\DigitalMarmalade\Model\ListerRouting;

class ProductController extends MarmaladeSuiteControllerAbstract
{
    use OutputsCachedImagesTrait;
    
    protected $listView = 'vendor.digitalmarmalade.MarmaladeSuite.Shop.Product.list';
    protected $addView = 'vendor.digitalmarmalade.MarmaladeSuite.Shop.Product.create';
    protected $editView = 'vendor.digitalmarmalade.MarmaladeSuite.Shop.Product.edit';
    
    protected $rules = [
        'name' => 'required|string',
        'sku' => 'required|unique:product_variations,sku',
        'description' => 'string',
        'stock_alteration' => 'integer',
        'price' => 'required|numeric|min:0',
        'image' => 'image',
        'imagereuse' => 'integer|exists:images,id',
        'imagealt' => 'string',
    ];
    
    protected $messages = [
        'name.required' => 'A product name is required',
        'sku.required' => 'A product stock keeping unit is required',
        'sku.unique' => 'The stock keeping unit is already in use by another product',
        'stock_alteration.integer' => 'The stock increment must be a whole number',
        'price.required' => 'The price is required',
        'price.numeric' => 'The price must be a valid number',
        'price.min' => 'The price must be 0 or more',
    ];
    
    protected $imageHeight = 400;
    protected $imageWidth = 400;
    
    public function listView()
    {
        $product = new ProductModel();
        $routingData = new ListerRouting($product);
        
        $filterableInterfaces = [
            
        ];
        
        $products = $product->sortable()->searchable()->paginate(15);
        
        return view($this->listView, [
            'products' => $products,
            'routingData' => $routingData,
            'filterable' => $filterableInterfaces
        ]);
    }
    
    public function addView()
    {
        return view($this->addView, [
            'imageWidth' => $this->imageWidth,
            'imageHeight' => $this->imageHeight,
            'reusableImages' => ReusableImage::getByWidthAndHeight($this->imageWidth, $this->imageHeight)
        ]);
    }
    
    public function addAction(Request $request)
    {
        $this->validate(
            $request,
            $this->getValidationRules(['stock' => 'required|integer|min:0']),
            $this->getValidationMessages([
                'stock.required' => 'The stock level must be entered',
                'stock.integer' => 'The stock level must be a valid number',
                'stock.min' => 'The stock level must be 0 or more',
            ])
        );
        
        $product = new ProductModel;
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->save();

        $productVariation = new ProductVariation();
        $productVariation->name = $product->name;
        $productVariation->product_id = $product->id;
        $productVariation->sku = $request->get('sku');
        $productVariation->stock = $request->get('stock');
        $productVariation->price = $request->get('price');
        $productVariation->image_alt = $request->get('image_alt');
        
        $croppedReusableImage = $this->getCroppedReusableImage();
        if ($croppedReusableImage->handled()) {
            $productVariation->image_filename = $croppedReusableImage->getClientOriginalName();
            $productVariation->image_filepath = relative_path($croppedReusableImage->getFilePath());
        }
        
        $productVariation->save();
        
        
        return redirect(route('msuiteShopEditProductView', ['productId' => $product->id]))->with('success', 'Product has been created successfully');
    }
    
    public function editView(Product $product)
    {
        return view($this->editView, [
            'product' => $product,
            'productVariation' => $product->variations()->first(),
            'imageWidth' => $this->imageWidth,
            'imageHeight' => $this->imageHeight,
            'reusableImages' => ReusableImage::getByWidthAndHeight($this->imageWidth, $this->imageHeight)
        ]);
    }
    
    public function updateAction(Request $request, Product $product)
    {
        $productVariation = $product->variations()->first();
        
        $this->validate(
                $request,
                $this->getValidationRules([
                'sku' => 'required|unique:product_variations,sku,' . $productVariation->id
            ]),
            $this->getValidationMessages()
        );
        
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->save();

        $productVariation->name = $product->name;
        $productVariation->sku = $request->get('sku');
        $productVariation->stock = $productVariation->stock + $request->get('stock_alteration', 0);
        if ($productVariation->stock < 0) {
            $productVariation->stock = 0;
        }
        
        $productVariation->price = $request->get('price');
        $productVariation->image_alt = $request->get('image_alt');
        
        $croppedReusableImage = $this->getCroppedReusableImage();
        if ($croppedReusableImage->handled()) {
            $productVariation->image_filename = $croppedReusableImage->getClientOriginalName();
            $productVariation->image_filepath = relative_path($croppedReusableImage->getFilePath());
        }
        
        $productVariation->save();
        
        return redirect(route('msuiteShopEditProductView', ['productId' => $product->id]))->with('success', 'Product has been updated successfully');
    }
    
    public function productVariationImageView(ProductVariation $productVariation)
    {
        if ($productVariation->image_filepath) {
            return $this->outputCachedImage(base_path($productVariation->image_filepath), 0);
        } else {
            return abort(404);
        }
    }
    
    protected function getCroppedReusableImage()
    {
        $croppedReusableImage = new CroppedReusableImage();
        $croppedReusableImage
            ->setFile('image')
            ->setCropFromInputs()
            ->setReuseInput('imagereuse')
            ->setMaximumSize($this->imageWidth, $this->imageHeight)
            ->setStoragePath(storage_path('shop' . DIRECTORY_SEPARATOR . 'images'))
            ->handle();
        return $croppedReusableImage;
    }
    
    protected function getValidationRules(array $extraRules = [])
    {
        return array_merge($this->rules, $extraRules);
    }
    
    protected function getValidationMessages(array $extraMessages = [])
    {
        return array_merge($this->messages, $extraMessages);
    }
}
