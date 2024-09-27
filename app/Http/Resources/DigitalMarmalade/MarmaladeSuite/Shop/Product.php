<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Shop;

use App\Http\Resources\DigitalMarmalade\Model\ModelAccessorTrait;
use App\Product as ProductModel;

class Product
{
    use ModelAccessorTrait;
    
    protected $modelClass = ProductModel::class;
    
    public function __construct($product)
    {
        $this->setModel($product);
    }
    
    public function options()
    {
        $options = $this->getModel()->options()->get();
        foreach ($options as $option) {
            $option['values'] = $option->values()->get();
        }
        return $options;
    }
    
}
