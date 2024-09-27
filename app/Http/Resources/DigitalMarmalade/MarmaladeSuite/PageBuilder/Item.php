<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

/**
 * MDF3 Specific Implementation of PageBuilder
 * @author tom
 */
abstract class Item extends \DigitalMarmalade\PageBuilder\Item
{
    
    public function save()
    {
        parent::save();
    }
    
    public function create()
    {
        parent::create();
        $this->_saveAllSettings();
    }
    
    public function getSettings()
    {
        if (parent::getSettings()->hasTranslator() && $this->getId() !== null && parent::getSettings()->getItemId() !== $this->getId()) {
            parent::getSettings()->setItemId($this->getId());
        }
        return parent::getSettings();
    }
    
    /**
     * Moves a file into the storage path and returns the full path to the stored file
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $file
     * @return string
     */
    protected function _storeFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file)
    {
        $storagePath = storage_path('app' . DIRECTORY_SEPARATOR);
        $fileName = intval(microtime(true) * 10000) . '-' . $file->getClientOriginalName();
        $file->move($storagePath, $fileName);
        return $storagePath . $fileName;
    }
    
    /**
     * Resaves all of the settings to run validation and any associated logic such as translations
     */
    protected function _saveAllSettings()
    {
        $settings = $this->getSettings()->get();
        foreach ($settings as $key => $value) {
            $this->getSettings()->set($key, $value);
        }
        $this->save();
    }
}
