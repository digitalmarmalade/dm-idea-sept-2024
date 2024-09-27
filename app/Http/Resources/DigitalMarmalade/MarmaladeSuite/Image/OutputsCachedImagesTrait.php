<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Image;

use Intervention\Image\Image as ImageItem;
use Intervention\Image\ImageManagerStatic;

trait OutputsCachedImagesTrait
{
    
    /**
     * @param string $imagePath
     * @param integer $cacheMinutes (in minutes)
     * @return type
     */
    protected function outputCachedImage($imagePath, $cacheMinutes = 60, $quality = 80)
    {
        $modified = 0;
        $cacheSeconds = $cacheMinutes * 60;
        
        $cachedImage = ImageManagerStatic::cache(function($image) use ($imagePath, &$modified) {
            $image->make($imagePath);
            $modified = array_key_exists('modified', $image->properties) ? $image->properties['modified'] : time();
            
        }, $cacheSeconds, true);

        $lastModifiedHeader = gmdate('D, d M Y H:i:s', $modified).' GMT';
        $eTag = '"' . md5($cachedImage->response($cachedImage->mime, $quality)) . '"';
        
        $isModified = false;

        $ifModifiedSince = isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])
            ? stripslashes($_SERVER['HTTP_IF_MODIFIED_SINCE'])
            : false;
        $ifNoneMatch = isset($_SERVER['HTTP_IF_NONE_MATCH'])
            ? stripslashes($_SERVER['HTTP_IF_NONE_MATCH'])
            : false;

        if (!$ifModifiedSince && !$ifNoneMatch) {
            $isModified = true;
        } elseif ($ifNoneMatch && $ifNoneMatch !== $eTag) {
            $isModified = true;
        } else if ($ifModifiedSince && $ifModifiedSince != $lastModifiedHeader) {
            $isModified = true;
        }

        if ($isModified) {
            return $cachedImage->response($cachedImage->mime, $quality)
                ->header('Cache-Control', 'max-age=' . $cacheSeconds)
                ->header('Expires', gmdate('D, d M Y H:i:s', (time()+$cacheSeconds) ).' GMT')
                ->header('Last-Modified', gmdate('D, d M Y H:i:s', $modified).' GMT')
                ->header('ETag', $eTag);
                    
        } else {
            return response('', 304);
        }
    }
    
}
