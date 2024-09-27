<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

use Illuminate\Support\Facades\Input;
use DigitalMarmalade\PageBuilder\PageInterface;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Exception\ItemSettingValidationException;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Exception\PageUpdateValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;
use TranslationCache;

trait PageUpdateHandlerTrait {
    
    protected function updatePageItems(PageInterface $page, $settings = null)
    {
        $settings = $this->_getPageItemSettings($settings);
        $errors = null;
        $settingsValidation = $this->_validateSettings($settings);
        if ($settingsValidation === true) {
            $this->_reorderPageItems($page, $settings->toArray());
            foreach ($page->getItems() as $item) {
                if (isset($settings[$item->getId()])) {
                    try {
                        $item->update(collect($settings[$item->getId()]));
                        $item->save();
                    } catch (ItemSettingValidationException $ex) {
                        if ($errors === null) {
                            $errors = $ex->getErrors();
                        } else {
                            $errors->merge($ex->getErrors());
                        }
                    }
                }
            }
        } else {
            throw new PageUpdateValidationException($settingsValidation);
        }
        
        TranslationCache::flushAll();
        $page->save();
        
        if ($errors !== null) {
            throw new PageUpdateValidationException($errors);
        }
        
    }
    
    private function _reorderPageItems(PageInterface $page, array $settings = null)
    {
        $page->reorderItems(array_keys($this->_getPageItemSettings($settings)->toArray()));
    }
    
    private function _getPageItemSettings(array $settings = null)
    {
        if ($settings === null) {
            return collect(isset(Input::all()['settings']) ? Input::all()['settings'] : []);
        } else {
            return collect($settings);
        }
    }
    
    private function _validateSettings(Collection $settings)
    {
        $validator = Validator::make(['settings' => $settings->toArray()], [
            'settings' => 'array'
        ]);
        if ($validator->passes()) {
            return true;
        } else {
            return $validator->errors();
        }
    }
    
}