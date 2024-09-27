<?php

namespace App\Http\Resources\DigitalMarmalade\Model;

use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Validator;

/**
 * Enables the ability to use the filterable() method on models
 */
trait FilterableTrait
{
    
    protected $_filterableInterfaces = [];

    /**
     * Uses the _getSearchableColumns method to get the list of searchable columns and filters the results using where clauses if a
     * search has been requested (if _hasSearch is true) using the term returned by getSearch
     * @param \Illuminate\Database\Eloquent\Builder $builder
     */
    public function scopeFilterable(Builder $builder, array $filterableInterfaces = [])
    {
        $this->_filterableInterfaces = [];
        foreach ($filterableInterfaces as $filterable) {
            $this->_filterableInterfaces[] = $filterable;
            $filterable->setInputName($this->_getFilterInputName());
            if ($filterable instanceof FilterableItemInterface && $this->_hasFilterValue($filterable)) {
                $this->_applyFilter($filterable, $builder);
            }
        }
    }
    
    public function scopeGetFilterable()
    {
        return $this->_filterableInterfaces;
    }
    
    private function _applyFilter(FilterableItemInterface $filterable, Builder $builder)
    {
        $filterable->setValue($this->_getFilterValue($filterable));
        if ($this->_validateValue($filterable)) {
            $filterable->applyFilter($builder, $filterable->getValue());
        }
    }
    
    private function _hasFilterValue(FilterableItemInterface $filterable)
    {
        return ($this->_getFilterValue($filterable) !== null);
    }
    
    private function _getFilterValue(FilterableItemInterface $filterable)
    {
        $value = collect(Input::get($this->_getFilterInputName(), null))->get($filterable->getName(), null);
        if (!is_string($value) || !strlen($value)) {
            return null;
        } else {
            return $value;
        }
    }
    
    private function _getFilterInputName()
    {
        return isset($this->filterableInput) ? $this->filterableInput : 'filter';
    }
    
    protected function _validateValue(FilterableItemInterface $filterable)
    {
        $available = $filterable->getAvailable();
        $rules = ['value' => (is_array($available) ? 'in:' . implode(',', array_keys($available)) : 'string')];
        $validator = Validator::make(['value' => $filterable->getValue()], $rules);
        return $validator->valid();
    }
    
}
