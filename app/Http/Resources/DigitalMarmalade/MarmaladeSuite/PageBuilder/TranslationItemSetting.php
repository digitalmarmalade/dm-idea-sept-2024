<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

use App;
use Waavi\Translation\Repositories\TranslationRepository;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Translator\Manager as TranslatorManager;

class TranslationItemSetting
{
    private $_settingLocation;
    private $_itemName;
    private $_itemId;
    private $_localeGroup = 'pagebuilder';
    private $_itemPrefix = null;
    
    public function __construct($itemId, $itemName, array $settingLocation, $value = '')
    {
        $this->_settingLocation = $settingLocation;
        $this->_itemName = $itemName;
        $this->_itemId = $itemId;
        $this->_itemPrefix = str_random(16);
        $this->set($value);
    }
    
    public function set($value, $id = null)
    {
        if ($id !== null) {
            $this->_itemId = $id;
        }
        if (!isset($this->_itemPrefix) || $this->_itemPrefix === null) {
            
            $newPrefix = str_random(16);
            $currentLocale = App::getLocale();
            
            App::setLocale(config('app.fallback_locale'));
            $fallbackLocaleValue = $this->get();
            
            foreach (array_keys(config('laravellocalization.supportedLocales')) as $locale) {
                App::setLocale($locale);
                $value = $this->get();
                if ($value && $value !== $fallbackLocaleValue) {
                    TranslatorManager::addOrUpdate($this->_localeGroup, $newPrefix . '_' . $this->_getItemName(), $value);
                }
            }
            
            App::setLocale($currentLocale);
            $this->_itemPrefix = $newPrefix;
        }
        return TranslatorManager::addOrUpdate($this->_localeGroup, $this->_getItemName(), $value);
    }
    
    public function get()
    {
        return TranslatorManager::get($this->_localeGroup, $this->_getItemName());
    }
    
    private function _getItemName()
    {
        $name = (isset($this->_itemPrefix) && $this->_itemPrefix !== null) ? $this->_itemPrefix . '_' : '';
        $name .= $this->_itemName . '[' . $this->_itemId . ']';
        foreach ($this->_settingLocation as $key) {
            $name .= '[' . $key . ']';
        }
        return $name;
    }
    
    public function __toString()
    {
        return $this->get();
    }
    
    
}
