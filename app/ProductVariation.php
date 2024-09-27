<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Amsgames\LaravelShop\Traits\ShopItemTrait;

class ProductVariation extends Model
{
    use ShopItemTrait;
    
    public function optionValues()
    {
        return $this->belongsToMany(ProductOptionValue::class);
    }
}
