<?php

namespace App\Http\Controllers\DigitalMarmalade\Shop;

use App\Http\Controllers\Controller;
use \Shop;
use App\Cart;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Shop\Product;
use App\Product as ProductModel;
use App\ProductVariation as ProductVariationModel;
use App\ProductVariationOption as ProductVariationOptionModel;

class ProductController extends Controller
{
    
    protected $listView = 'vendor.digitalmarmalade.Shop.list';
    
    public function listView()
    {
        $products = ProductModel::get();
        $products->transform(function($productModel) {
            return new Product($productModel);
        });
        
        return view($this->listView, [
            'products' => $products,
            'cart' => Cart::current()
        ]);
    }
    
    public function productVariationView(Request $request, Product $product)
    {
        $options = $product->options();
        $optionIds = [];
        
        foreach ($options as $option) {
            $optionIds[] = $option->id;
        }
        
        $this->validate($request, [
            'options' => 'array|size:' . count($options) . '|array_keys_in:' . implode(',', $optionIds)
        ]);
        
        $productVariatonOption = ProductVariationOptionModel
                ::selectRaw('COUNT(id) as count')
                ->addSelect('product_variation_id')
                ->where('product_id', $product->id)
                ->groupBy('product_variation_id')
                ->orderBy('count', 'DESC')
                ->limit(1);
        
        $productVariatonOption->where(function($where) use ($request) {
            foreach ($request->get('options', []) as $optionId => $valueId) {
                $where->orWhere(function($orWhere) use ($optionId, $valueId) {
                    $orWhere
                        ->where('product_option_id', $optionId)
                        ->where('product_option_value_id', $valueId);
                });
            }
        });
        
        $productVariationOptionResult = $productVariatonOption->first();
        
        //If we have a result and the number of options does not match the expected number then it's invalid
        if ($productVariationOptionResult !== null && intval($productVariationOptionResult->count) !== count($options)) {
            return abort(404);
        }
        
        //this product probably has no options
        if ($productVariationOptionResult === null) {
            $productVariation = ProductVariationModel::where('product_id', $product->id);
            
            if ($productVariation->count() === 1) { //we have 1 result, so there is no options
                return $productVariation->first();
            }
        }
        
        return abort(404);
    }
    
}
