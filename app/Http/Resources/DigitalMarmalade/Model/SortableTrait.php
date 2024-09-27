<?php

namespace App\Http\Resources\DigitalMarmalade\Model;

use Illuminate\Support\Facades\Input;

/**
 * Enables the ability to use the sortable() method on models
 */
trait SortableTrait
{

    /**
     * Returns data about the current sorting as an array
     * @return array
     */
    public function getSortableData()
    {
        $sortableColumns = $this->_getSortableColumnNames();
        $currentSort = $this->_getSort();
        $sortableData = [];
        foreach ($sortableColumns as $sortableColumn) {
            if ($currentSort['column'] === $sortableColumn) {
                $sortableData[$sortableColumn] = [
                    'sorted' => true,
                    'direction' => strtolower($currentSort['direction']),
                    'direction_parameter' => $sortableColumn . '-' . strtolower($currentSort['direction']),
                    'alternative_direction' => $this->_alternativeDirection($currentSort['direction']),
                    'alternative_direction_parameter' => $sortableColumn . '-' . $this->_alternativeDirection($currentSort['direction'])
                ];
            } else {
                $sortableData[$sortableColumn] = [
                    'sorted' => false,
                    'alternative_direction' => 'asc',
                    'alternative_direction_parameter' => $sortableColumn . '-asc'
                ];
            }
        }
        return $sortableData;
    }
    
    /**
     * The query scope sortable method allows the use of Model::sortable() or Model::otherMethods()->sortable() to sort the results based on the sort input
     * (if specified) or sort if not. The orderBy will only complete if the sort column is specified in the sortable protected variable on the model
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSortable(\Illuminate\Database\Eloquent\Builder $query)
    {
        if ($this->_hasSortInput()) {
            $sort = $this->_getSort();
            return $query->orderBy($sort['column'], $sort['direction']);
        }
    }
    
    /**
     * Returns the column and direction of the current sorting
     * @return array
     */
    private function _getSort()
    {
        foreach ($this->_getSortableColumnNames() as $sortableColumn) {
            if (substr($this->_getSortInput(), 0, strlen($sortableColumn)) === $sortableColumn) {
                return [
                    'column' => $sortableColumn,
                    'direction' => (substr($this->_getSortInput(), -4, 4) === '-asc' ? 'ASC' : 'DESC')
                ];
            }
        }
        
    }
    
    /**
     * If there is a sort specified in the current request
     * @return boolean
     */
    private function _hasSortInput()
    {
        return ($this->_getSortInput() !== null);
    }
    
    /**
     * Get an array of column names that are allowed to be sorted by
     * @return array
     */
    private function _getSortableColumnNames()
    {
        return isset($this->sortable) ? $this->sortable : [];
    }
    
    /**
     * Get the value of the input that specifies the sort ordering
     * @return type
     */
    private function _getSortInput()
    {
        return Input::get($this->getSortInputName(), null);
    }
    
    /**
     * Get the name of the input used to specify the sort ordering
     * @return string
     */
    public function getSortInputName()
    {
        return isset($this->sortableInput) ? $this->sortableInput : 'sort';
    }
    
    /**
     * Returns the opposite direction from the passed in direction
     * @param string $direction
     * @return string
     */
    private function _alternativeDirection($direction)
    {
        return (strtolower($direction) === 'asc' ? 'desc' : 'asc');
    }
    
}
