<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductVariationOption extends Model
{
    public function variation()
    {
        return $this->hasOne(ProductVariation::class);
    }
}
