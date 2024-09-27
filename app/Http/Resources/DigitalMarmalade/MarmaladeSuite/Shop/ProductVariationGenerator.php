<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Shop;

class ProductVariationGenerator
{
    
    private $options = [];
    private $generatedVariations = [];
    
    public function addOption($option, array $values)
    {
        $this->options = ['name' => $option, 'values' => $values];
    }
    
    public function generate()
    {
        $generatedVariations = [];
        
        foreach ($this->options as $index => $option) {
            foreach ($option['values'] as $value) {
                $generatedVariations[] = [
                    'options' => 
                ];
            }
        }
        
        //Colour: red
        //Colour: black
        
        //Size: 7
        //Size: 8
    }
    
    private function addVariation($option, $values)
    {
        
        
    }
    
}
