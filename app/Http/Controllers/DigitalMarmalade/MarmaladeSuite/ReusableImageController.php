<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite;

use App\Http\Controllers\Controller;
use App\Image as ImageModel;
use Intervention\Image\Facades\Image;

class ReusableImageController extends Controller
{
    
    public function view(ImageModel $image)
    {
        return Image::make(base_path($image->filepath))->response();
    }
    
}
