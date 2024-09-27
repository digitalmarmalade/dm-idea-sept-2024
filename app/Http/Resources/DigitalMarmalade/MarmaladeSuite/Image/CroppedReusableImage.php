<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Image;

use App\Image as ImageModel;
use Illuminate\Support\Facades\Input;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Image\ReusableImage;
use DigitalMarmalade\Cropper\CropperInput;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Validator;

/**
 * Handles cropped image uploads/reusable images
 */
class CroppedReusableImage
{
    
    private $_file = null;
    private $_x;
    private $_y;
    private $_width;
    private $_height;
    
    private $_maximumWidth = null;
    private $_maximumHeight = null;
    
    private $_reuseId = null;
    
    private $_cropperInput;
    private $_reusableImage;
    
    private $_clientOriginalName;
    private $_savedFilePath;
    
    protected $_storagePath = null;
    
    private $_handled = false;
    
    private $_extensions = [
        'x' => '_x',
        'y' => '_y',
        'w' => '_width',
        'h' => '_height'
    ];
    
    /**
     * Attempts to handle the image upload/reuse using the data provided. When sufficient data is provided to handle the request returns true, otherwise returns false if no action can be taken.
     * @return boolean
     */
    public function handle()
    {
        if ($this->_handled === true || !$this->canBeHandled()) { //cannot handle twice
            return false;
        }
        
        if ($this->hasFile()) {
            $this->_handleFileUpload();
        } elseif ($this->_reuseId) {
            $this->_handleReuse();
        }
        
        return $this->handled();
    }
    
    /**
     * Checks to see if the image has been handled (same as the return value from handle())
     * @return boolean
     */
    public function handled()
    {
        return $this->_handled;
    }
    
    /**
     * Returns the name of the image as it was on the uploaders device
     * @return string
     */
    public function getClientOriginalName()
    {
        return $this->_clientOriginalName;
    }
    
    /**
     * Returns the absolute path to the image (only available when handled() is true)
     * @return string
     */
    public function getFilePath()
    {
        return $this->_savedFilePath;
    }
    
    /**
     * Set the name or instance of the uploaded file. Accepts string or UploadedFile or null if no file is provided.
     * @param UploadedFile|string|null $file
     * @return CroppedReusableImage
     */
    public function setFile($file)
    {
        $this->_file = $file;
        return $this;
    }
    
    /**
     * Sets the name of the input field used to supply the Image Id or null if the reusable functionality is not used
     * @param type $inputName
     * @return type
     */
    public function setReuseInput($inputName)
    {
        return $this->setReuseId(Input::get($inputName, null));
    }
    
    /**
     * Manually set the Images id rather than using an input name
     * @param integer $imagesId
     * @return CroppedReusableImage
     */
    public function setReuseId($imagesId)
    {
        $this->_reuseId = ($this->_validateImagesId($imagesId) ? $imagesId : null);
        return $this;
    }
    
    /**
     * Sets the directory to store the file in if handling is successful when running handle()
     * Note that this should be a directory path as the filename is randomyl generated
     * @param string $path
     * @return CroppedReusableImage
     */
    public function setStoragePath($path)
    {
        $this->_storagePath = $path;
        return $this;
    }
    
    /**
     * Set the crop dimensions from the cropper interface
     * @param integer $x
     * @param integer $y
     * @param integer $width
     * @param integer $height
     * @return CroppedReusableImage
     */
    public function setCrop($x, $y, $width, $height)
    {
        $this->_x = $x;
        $this->_y = $y;
        $this->_width = $width;
        $this->_height = $height;
        return $this;
    }
    
    /**
     * Returns true when sufficient parameters have been provided to perform a crop (x, y, width and height)
     * @return boolean
     */
    public function hasCrop()
    {
        return ($this->_x !== null && $this->_y !== null && $this->_width !== null && $this->_height !== null);
    }
    
    /**
     * Allows you to use suffixes of the file input name to automatically grab the x, y, width and height data. To use this method you must have already passed a string to setFile()
     * @param string $x
     * @param string $y
     * @param string $width
     * @param string $height
     * @return CroppedReusableImage
     */
    public function setCropExtensions($x, $y, $width, $height)
    {
        $this->_extensions = [
            'x' => $x,
            'y' => $y,
            'w' => $width,
            'h' => $height
        ];
        return $this->setCropFromInputs();
    }
    
    /**
     * Sets the x, y, width and height data up using the suffixes defined in setCropExtensions or using the default _x, _y, _width and _height suffixes
     * @return CroppedReusableImage
     */
    public function setCropFromInputs()
    {
        return $this->setCrop(
            Input::get($this->_file . $this->_extensions['x']),
            Input::get($this->_file . $this->_extensions['y']),
            Input::get($this->_file . $this->_extensions['w']),
            Input::get($this->_file . $this->_extensions['h'])
        );
    }
    
    /**
     * Sets the maximum width and height of the image after it has been cropped
     * @param integer $maximumWidth
     * @param integer $maximumHeight
     * @return CroppedReusableImage
     */
    public function setMaximumSize($maximumWidth, $maximumHeight)
    {
        $this->_maximumWidth = $maximumWidth;
        $this->_maximumHeight = $maximumHeight;
        return $this;
    }
    
    public function hasMaximumSize()
    {
        return ($this->_maximumHeight !== null && $this->_maximumWidth);
    }
    
    public function hasFile()
    {
        try {
            $this->getFile();
            return true;
        } catch (\ErrorException $ex) {
            return false;
        }
    }
    
    /**
     * Attempts to get an instance of UploadedFile using the data set in setFile()
     * @return type
     * @throws \ErrorException
     */
    public function getFile()
    {
        if ($this->_file instanceof UploadedFile) {
            return $this->_file;
        }
        
        if (is_string($this->_file) && Input::hasFile($this->_file) && Input::file($this->_file)->isValid()) {
            return Input::file($this->_file);
        }
        
        throw new \ErrorException('Cannot get file in ' . static::class . ', file does not exist.');
    }
    
    /**
     * Checks to see if sufficient data has been supplied to handle the image upload/reuse.
     * @return type
     */
    public function canBeHandled()
    {
        return (
            ($this->hasFile() || $this->hasReuseId()) &&
            $this->_storagePath !== null &&
            (
                ($this->hasFile() && $this->hasCrop()) ||
                !$this->hasFile()
            )
        );
    }
    
    public function hasReuseId() {
        return ($this->_reuseId !== null);
    }
    
    private function _handleFileUpload()
    {
        $this->_cropperInput = CropperInput::makeValues($this->getFile(), $this->_x, $this->_y, $this->_width, $this->_height);
        
        $image = $this->_cropperInput->get();
        if ($this->hasMaximumSize()) {
            $image = $this->_resizeImage($image);
        }
        
        $this->_reusableImage = new ReusableImage($image);
        
        $this->_savedFilePath = $this->_reusableImage->save($this->getFile()->getClientOriginalName(), $this->_storagePath, $this->getFile()->getClientOriginalExtension());
        $this->_clientOriginalName = $this->getFile()->getClientOriginalName();

        $this->_handled = true;
    }
    
    
    private function _resizeImage(\Intervention\Image\Image $image)
    {
        if ($this->_maximumWidth !== null && $this->_maximumHeight) {
            $image->fit($this->_maximumWidth, $this->_maximumHeight);
        }
        return $image;
    }
    
    
    private function _handleReuse()
    {
        $image = ImageModel::findOrFail($this->_reuseId);
            
        $this->_clientOriginalName = $image->filename;
        $this->_savedFilePath = base_path($image->filepath);

        $this->_handled = true;
    }
    
    private function _validateImagesId($imagesId)
    {
        $validator = Validator::make([
            'reuse' => $imagesId
        ],
        [
            'reuse' => 'required|integer|exists:images,id'
        ]);
        
        return $validator->passes();
    }
    
}
