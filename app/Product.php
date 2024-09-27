<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Http\Resources\DigitalMarmalade\Model\SortableTrait,
    Http\Resources\DigitalMarmalade\Model\SearchableTrait;
    
    public function options()
    {
        return $this->hasMany(ProductOption::class);
    }
    
    public function optionsValues()
    {
        $values = collect();
        $options = $this->options()->get();
        foreach ($options as $option) {
            $values = $values->merge($option->values()->get());
        }
        return $values;
    }
    
    public function variations()
    {
        return $this->hasMany(ProductVariation::class);
    }
}
