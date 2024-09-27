<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Exception;

/**
 * @author tom
 */
class ItemSettingValidationException extends \Exception
{
    
    protected $errors;
    
    public function __construct($errors)
    {
        $this->errors = $errors;
    }
    
    public function getErrors()
    {
        return $this->errors;
    }
    
}