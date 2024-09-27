<?php

namespace App\Http\Resources\DigitalMarmalade\Model;

use Illuminate\Support\Facades\Input;

/**
 * Enables the ability to use the searchable() method on models
 */
trait SearchableTrait
{

    /**
     * Uses the _getSearchableColumns method to get the list of searchable columns and filters the results using where clauses if a
     * search has been requested (if _hasSearch is true) using the term returned by getSearch
     * @param \Illuminate\Database\Eloquent\Builder $query
     */
    public function scopeSearchable(\Illuminate\Database\Eloquent\Builder $query)
    {
        if ($this->_hasSearch()) {
            $query->where(function($subQuery) {
                foreach ($this->_getSearchableColumns() as $searchableColumn) {
                    $subQuery->orWhere($this->getTable() . '.' . $searchableColumn, 'LIKE', '%' . $this->getSearch() . '%');
                }
            });
        }
    }
    
    /**
     * Get the current search term
     * @return string
     */
    public function getSearch()
    {
        return Input::get($this->getSearchInputName(), null);
    }
    
    /**
     * Get the name of the input used for searching
     * @return string
     */
    public function getSearchInputName()
    {
        return isset($this->searchableInput) ? $this->searchableInput : 'search';
    }
    
    /**
     * Returns an array of searchable columns as specified in the $searchable class variable on the model
     * @return array
     */
    private function _getSearchableColumns()
    {
        return isset($this->searchable) ? $this->searchable : [];
    }
    
    /**
     * Whether the current request has a search term
     * @return boolean
     */
    private function _hasSearch()
    {
        return (strlen($this->getSearch()) > 0);
    }
    
    
}
