<?php

namespace App\Http\Resources\DigitalMarmalade\Model;

use Collective\Html\FormFacade;


/**
 * Provides data related to routing the user around a page with a list with searchable/sortable/filterable or pagination enabled which
 * is useful for outputting the sorting buttons/search forms
 */
class ListerRouting
{
    
    private $_model;
    
    /**
     * Constructs the routing data using the specified model.
     * Note that this must be an instance of the model object not a Builder object
     * @param \Illuminate\Database\Eloquent\Model $model
     */
    public function __construct(\Illuminate\Database\Eloquent\Model $model)
    {
        $this->_model = $model;
    }
    
    public function getSearch()
    {
        return ($this->_isSearchable()) ? ($this->_getSearchableData() ? $this->_getSearchableData() : '') : '';
    }
    
    /**
     * Outputs hidden inputs to reset the page number and preserve the sorting order (if enabled) when doing a search.
     * @return string HTML
     */
    public function renderSearchFormInputs()
    {
        $inputDom = '';
        $inputDom .= FormFacade::hidden('page', 1);
        if ($this->_isSortable()) {
            $sortableData = $this->_getSortableData();
            foreach ($sortableData as $sortableItem) {
                if ($sortableItem['sorted'] === true) {
                    $inputDom .= FormFacade::hidden($this->_model->getSortInputName(), $sortableItem['direction_parameter']);
                }
            }
        }
        return $inputDom;
    }
    
    /**
     * Outputs hidden inputs to reset the page number and preserve the sorting order (if enabled) when doing a search.
     * @return string HTML
     */
    public function renderFilterFormInputs()
    {
        $inputDom = '';
        $inputDom .= FormFacade::hidden('page', 1);
        if ($this->_isSortable()) {
            $sortableData = $this->_getSortableData();
            foreach ($sortableData as $sortableItem) {
                if ($sortableItem['sorted'] === true) {
                    $inputDom .= FormFacade::hidden($this->_model->getSortInputName(), $sortableItem['direction_parameter']);
                }
            }
        }
        if ($this->_isSearchable()) {
            $inputDom .= FormFacade::hidden($this->_model->getSearchInputName(), $this->_model->getSearch());
        }
        return $inputDom;
    }
    
    
    /**
     * Returns an array of parameters required for links/buttons that toggle the sort order of a the specified field
     * @param string $fieldName
     * @return array
     */
    public function getSortableRouteParameters($fieldName)
    {
        $sortableRouteParameters = [];
        if ($this->_isSortable()) {
            $sortableData = $this->_getSortableData();
            if (isset($sortableData[$fieldName])) {
                $sortableRouteParameters = [
                    $this->_model->getSortInputName() => $sortableData[$fieldName]['alternative_direction_parameter'],
                    'page' => 1
                ];
            }
            if ($this->_isSearchable()) {
                $sortableRouteParameters[$this->_model->getSearchInputName()] = $this->_model->getSearch();
            }
        }
        return $this->_addFilterableParameters($sortableRouteParameters);
    }
    
    /**
     * Returns the additional parameters required for the change page buttons to maintain the current search (if enabled) and sorting order (if enabled)
     * @return array
     */
    public function getPaginationRouteParameters()
    {
        $parameters = [];
        if ($this->_isSearchable()) {
            $parameters[$this->_model->getSearchInputName()] = $this->_model->getSearch();
        }
        if ($this->_isSortable()) {
            $sortableData = $this->_getSortableData();
            foreach ($sortableData as $sortableItem) {
                if ($sortableItem['sorted'] === true) {
                    $parameters[$this->_model->getSortInputName()] = $sortableItem['direction_parameter'];
                }
            }
        }
        return $this->_addFilterableParameters($parameters);
    }
    
    private function _addFilterableParameters(array $parameters)
    {
        if ($this->_isFilterable()) {
            $filterableInterfaces = $this->_model->getFilterable();
            $filterableFilters = [];
            foreach ($filterableInterfaces as $filterable) {
                if (!isset($filterableFilters[$filterable->getInputName()])) {
                    $filterableFilters[$filterable->getInputName()] = [];
                }
                $filterableFilters[$filterable->getInputName()][$filterable->getName()] = $filterable->getValue();
            }
            $parameters[array_keys($filterableFilters)[0]] = array_first($filterableFilters);
        }
        return $parameters;
    }
    
    /**
     * @return boolean
     */
    private function _isSearchable()
    {
        return in_array(SearchableTrait::class, class_uses($this->_model));
    }
    
    /**
     * @return boolean
     */
    private function _isSortable()
    {
        return in_array(SortableTrait::class, class_uses($this->_model));
    }
    
    /**
     * @return boolean
     */
    private function _isFilterable()
    {
        return in_array(FilterableTrait::class, class_uses($this->_model));
    }
    
    /**
     * Get the data provided by the SortableTrait
     * @return array
     */
    private function _getSortableData()
    {
        return $this->_model->getSortableData();
    }
    
    /**
     * Get data provided by the SearchableTrait
     * @return string
     */
    private function _getSearchableData()
    {
        return $this->_model->getSearch();
    }
    
}
