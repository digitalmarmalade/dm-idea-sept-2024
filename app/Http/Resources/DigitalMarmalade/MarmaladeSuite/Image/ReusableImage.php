<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Image;

use Intervention\Image\Image;
use App\Image as ImageModel;

class ReusableImage
{
    
    protected $_image;
    
    public function __construct(Image $image)
    {
        $this->_image = $image;
    }
    
    public static function getById($id)
    {
        return ImageModel::findOrFail($id);
    }
    
    public static function getByWidthAndHeight($width, $height)
    {
        return ImageModel::where('width', $width)->where('height', $height)->get();
    }
    
    public function save($originalFilename, $path, $extension = 'png')
    {
        $name = uniqid('reusableimage_') . '.' . $extension;
        $filePath = $path . DIRECTORY_SEPARATOR . $name;
        $this->_image->save($filePath);
        
        $this->_createDatabaseRecord($originalFilename, $filePath);
        
        return $filePath;
    }
    
    public function getImage()
    {
        return $this->_image;
    }
    
    protected function _createDatabaseRecord($originalFilename, $filePath)
    {
        $image = new ImageModel;
        $image->filename = $originalFilename;
        $image->filepath = relative_path($filePath);
        $image->width = $this->_image->width();
        $image->height = $this->_image->height();
        $image->save();
        return $image->id;
    }
    
    
}
