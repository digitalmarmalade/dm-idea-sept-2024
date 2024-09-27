<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    public function values()
    {
        return $this->hasMany(ProductOptionValue::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
