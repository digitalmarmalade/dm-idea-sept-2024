<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

use App;

trait TranslationSettingHelper
{
    
    protected function _recursiveStringsToTranslationItemSetting($settingName, $value, $currentPath = [])
    {
        //dd($settingName, $value, $currentPath);
        if (!count($currentPath)) {
            $currentPath = [$settingName];
        }
        if (is_array($value)) {
            foreach ($value as $key => &$subValue) {
                $recursiveCallPath = $currentPath;
                $recursiveCallPath[] = $key;
                $subValue = $this->_recursiveStringsToTranslationItemSetting($settingName, $subValue, $recursiveCallPath);
            }
        } elseif (is_string($value)) {
            $currentSettingsItem = array_get($this->_settings, implode('.', $currentPath));
           
            if ($currentSettingsItem instanceof TranslationItemSetting) {
                $currentSettingsItem->set($value, $this->_id);
                $value = $currentSettingsItem;
            } else {
                $value = $this->makeTranslationItemSetting($currentPath, $value);
            }
        }
        return $value;
    }
    
    protected function _recursiveTranslationItemSettingToString($value)
    {
        if (is_array($value)) {
            foreach ($value as &$subValue) {
                $subValue = $this->_recursiveTranslationItemSettingToString($subValue);
            }
        } elseif ($value instanceof TranslationItemSetting) {
            $value = $value->get();
        }
        return $value;
    }
    
    protected function makeTranslationItemSetting($settingLocation, $value)
    {
        $translationItemSetting = App::make(TranslationItemSetting::class, ['itemId' => $this->_id, 'itemName' => last(explode('\\', self::class)), 'settingLocation' => $settingLocation, 'value' => $value]);
        $translationItemSetting->set($value);
        return $translationItemSetting;
    }
    
}
