<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Exception;

/**
 * @author tom
 */
class PageUpdateValidationException extends \Exception
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