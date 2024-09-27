<?php

namespace App\Http\Resources\DigitalMarmalade\Model;

interface FilterableItemInterface
{
    public function render();
    
    public function setTemplate($template);
    
    public function getAvailable();
    
    public function getName();
    
    public function setValue($value);
    
    public function getInputName();
    
    public function setInputName($name);
    
    public function getValue();
    
    public function applyFilter(\Illuminate\Database\Eloquent\Builder $query);
    
}