<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Image\CroppedReusableImage;

trait ItemReusableImageUploadHandlerTrait { 
    
    /**
     * Stores an uploaded image file, crops and sets up the reusable image then updates the item filepath/filename settings or returns the filepath/filename as an array
     * 
     * @param UploadedFile|null $file
     * @param string $reuseImagesId
     * @param string $storeFilePathSetting
     * @param string $storeFileNameSetting
     * @param string $returnSettings
     * @return mixed
     */
    protected function _handleReusableImageFileUpload($file, $x, $y, $width, $height, $maximumWidth, $maximimHeight, $reuseImagesId, $storeFilePathSetting, $storeFileNameSetting, $returnSettings = false)
    {
        $croppedReusableImage = new CroppedReusableImage();
        $croppedReusableImage->setFile($file)
            ->setReuseId($reuseImagesId)
            ->setStoragePath(storage_path('pages' . DIRECTORY_SEPARATOR . 'images'))
            ->setCrop($x, $y, $width, $height)
            ->setMaximumSize($maximumWidth, $maximimHeight)
            ->handle();
            
        if (!$croppedReusableImage->handled()) {
            return null;
        } else {
            if ($returnSettings === true) {
                return [
                    $storeFilePathSetting => $croppedReusableImage->getFilePath(),
                    $storeFileNameSetting => $croppedReusableImage->getClientOriginalName()
                ];
            } else {
                $this->getSettings()->set($storeFilePathSetting, relative_path($croppedReusableImage->getFilePath()));
                $this->getSettings()->set($storeFileNameSetting, $croppedReusableImage->getClientOriginalName());
            }
        }
    }
}
