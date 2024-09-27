<?php

namespace App\Http\Resources\DigitalMarmalade\Model;

abstract class FilterableItemAbstract implements FilterableItemInterface
{
    protected $_inputName;
    protected $_template = 'vendor.digitalmarmalade.MarmaladeSuite.Filterable.select';
    protected $_value;
    
    public function getInputName()
    {
        return $this->_inputName;
    }

    public function getValue()
    {
        return $this->_value;
    }

    public function render()
    {
        return view($this->_template, [
            'inputName' => $this->getInputName(),
            'name' => $this->getName(),
            'value' => $this->getValue(),
            'available' => $this->getAvailable()
        ]);
    }

    public function setInputName($name)
    {
        $this->_inputName = $name;
    }

    public function setTemplate($template)
    {
        $this->_template = $template;
    }

    public function setValue($value)
    {
        $this->_value = $value;
    }
    
    protected function valueToIntegerOrEmptyString($value)
    {
        return (is_numeric($value)) ? intval($value) : '';
    }

}
