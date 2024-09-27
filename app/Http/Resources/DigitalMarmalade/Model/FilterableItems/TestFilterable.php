<?php

namespace App\Http\Resources\DigitalMarmalade\Model;

class TestFilterable implements FilterableItemInterface
{
    
    private $_template = 'vendor.digitalmarmalade.MarmaladeSuite.testfilterable';
    private $_value;
    private $_inputName = 'filter';
    
    public function applyFilter(\Illuminate\Database\Eloquent\Builder $query)
    {
        $query->where('name', '=', $this->getValue());
    }

    public function getAvailable()
    {
       return [
           '' => 'Select Something',
           'En1' => 'English 1',
           'Something Else' => 'Something Else'
       ];
    }

    public function getName()
    {
        return 'test';
    }

    public function getValue()
    {
        return $this->_value;
    }

    public function setValue($value)
    {
        $this->_value = $value;
    }

    public function render()
    {
        return view('vendor.digitalmarmalade.MarmaladeSuite.testfilterable', [
            'inputName' => $this->getInputName(),
            'available' => $this->getAvailable(),
            'name' => $this->getName(),
            'value' => $this->getValue()
        ]);
    }

    public function setInputName($inputName)
    {
        $this->_inputName = $inputName;
    }

    public function getInputName()
    {
        return $this->_inputName;
    }

    public function setTemplate($template)
    {
        $this->_template = $template;
    }

}
