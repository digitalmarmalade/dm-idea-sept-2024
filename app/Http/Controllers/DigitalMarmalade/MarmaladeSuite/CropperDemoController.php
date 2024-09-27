<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite;

/**
 * Controller used for the Cropper demo
 */
class CropperDemoController extends MarmaladeSuiteControllerAbstract
{

    /**
     * Renders the cropper demo template
     * @return string
     */
    public function view()
    {
        return view('vendor.digitalmarmalade.MarmaladeSuite.cropperdemo');
    }
    
    /**
     * handles the file upload presented by the croper demo template, crops and returns the image
     * @return string
     */
    public function upload()
    {
        $cropperInput = \DigitalMarmalade\Cropper\CropperInput::make('cropme');
        return $cropperInput->get()->response();
        
    }

}
