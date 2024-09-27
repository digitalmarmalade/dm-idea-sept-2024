<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * MDF3 Specific ItemSettings implementation
 * @author tom
 */
abstract class ItemSettings extends \DigitalMarmalade\PageBuilder\ItemSettings
{
    use ValidatesRequests;
    
    protected $_rules = [];
    protected $_id = null;
    
    public function set($key, $value) {
        $validationResult = $this->_validateSetting($key, $value);
        
        if ($validationResult !== true) {
            throw new Exception\ItemSettingValidationException($validationResult);
        }
        
        if ($this->hasTranslator() && config('msuite.app.pagebuilder.translator')) {
            parent::set($key, $this->_recursiveStringsToTranslationItemSetting($key, $value));
        } else {
            parent::set($key, $value);
        }
        return true;
    }
    
    public function get($key = null)
    {
        if ($this->hasTranslator() && config('msuite.app.pagebuilder.translator')) {
            return $this->_recursiveTranslationItemSettingToString(parent::get($key));
        } else {
            return parent::get($key);
        }
    }
    
    public function hasTranslator()
    {
        return (in_array(TranslationSettingHelper::class, class_uses(static::class)));
    }
    
    public function getItemId()
    {
        return $this->_id;
    }
    
    public function setItemId($id)
    {
        $this->_id = $id;
    }
    
    /**
     * Returns an array of laravel valadation settings in format ['settingName' => 'validationRules']
     * @param string $key optional key to return only 1 specific key
     * Return @array
     */
    protected function _getValidationRules($key = null) {
        if ($key === null) {
            return $this->_rules;
        } else {
            $matchedRules = [];
            foreach ($this->_rules as $ruleName => $rule) {
                if (substr($ruleName, 0, strlen($key)) === $key) {
                    $matchedRules[$ruleName] = $rule;
                }
            }
            if (count($matchedRules) === 0) {
                throw new Exception\ItemSettingException('Could not find required validation rules for ' . $key);
            }
            return $matchedRules;
        }
    }
    
    protected function _getValidationMessages($key = null) {
        return isset($this->_messages) ? $this->_messages : [];
    }
    
    /**
     * Run the validation of a single key/value by matching the key against the rules class variable
     * @param string $key
     * @param mixed $value
     */
    protected function _validateSetting($key, $value)
    {
        $data = [$key => $value];
        $rules = $this->_getValidationRules($key);
        return $this->_validate($data, $rules, $this->_getValidationMessages());
    }
    
    /**
     * Validates an array of data using the passed rules
     * @param array $data
     * @param array $rules
     */
    protected function _validate(array $data, array $rules, array $messages = [])
    {
        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return $validator->errors();
        } else {
            return true;
        }
    }
    
    /**
     * Clone method will run when hasTranslator is true and resets all TranslationItemSettings to raw strings to prevent reusing the same translation record
     */
    public function __clone()
    {
        if ($this->hasTranslator()) {
            $settings = $this->get();
            foreach ($settings as $key => $value) {
                parent::set($key, $value);
            }
        }
    }
    
}
