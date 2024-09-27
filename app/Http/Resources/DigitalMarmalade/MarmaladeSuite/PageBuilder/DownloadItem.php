<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\Facades\Image;
use Intervention\Image\Exception\NotReadableException;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Image\OutputsCachedImagesTrait;

/**
 * MDF3 Specific Implementation of PageBuilder Item that has a requirement to download files to the user
 * @author tom
 */
abstract class DownloadItem extends Item
{
    use OutputsCachedImagesTrait;
    
    public function downloadFile($settingName)
    {
        $this->_validateDownloadSettingName($settingName);
        
        $filePath = $this->getSettings()->get($settingName);
        
        try {
            return $this->outputCachedImage(base_path($filePath));
        } catch (NotReadableException $e) { //It's not an image
            return response()->download(base_path($filePath));
        }
        
    }
    
    protected function _validateDownloadSettingName($settingName) {
        if (!isset($this->_allowDownload) || !in_array($settingName, $this->_allowDownload, true)) {
            throw new Exception\ItemSettingIsNotDownloadable($settingName . ' is not allowed to be downloaded');
        }
    }
    
    /**
     * Stores an uploaded file then updates the item filepath/filename settings or returns the filepath/filename as an array
     * @param UploadedFile $file
     * @param string $storeFilePathSetting
     * @param string $storeFileNameSetting
     * @param boolean $returnSettings
     * @return mixed
     */
    protected function _handleFileUpload(UploadedFile $file, $storeFilePathSetting, $storeFileNameSetting, $returnSettings = false)
    {
        $filePath = $this->_storeFile($file);
        if ($returnSettings === true) {
            return [
                $storeFilePathSetting => $filePath,
                $storeFileNameSetting => $file->getClientOriginalName()
            ];
        } else {
            $this->getSettings()->set($storeFilePathSetting, relative_path($filePath));
            $this->getSettings()->set($storeFileNameSetting, $file->getClientOriginalName());
        }
    }
}
