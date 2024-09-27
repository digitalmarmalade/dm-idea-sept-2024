<?php

namespace App\Http\Resources\DigitalMarmalade\Blade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;

class Inline
{
    
    public static function js($assetPath)
    {
        if (self::isMinified()) {
            return '<script>' . self::minify(self::getFilePath($assetPath)) . '</script>';
        } else {
            return '<script src="' . asset($assetPath) . '"></script>';
        }
    }
    
    public static function css($assetPath)
    {
        if (self::isMinified()) {
            return '<style>' . self::minify(self::getFilePath($assetPath)) . '</style>';
        } else {
            return '<link rel="stylesheet" href="' . asset($assetPath) . '" />';
        }
    }
    
    private static function getFilePath($assetPath)
    {
        return public_path(str_replace('/', DIRECTORY_SEPARATOR, $assetPath));
    }
    
    private static function isMinified()
    {
        return Input::get('minify', config('app.debug')) ? true : false;
    }
    
    private static function minify($filePath)
    {
        $content = File::get($filePath);
        //  remove comments and minimise
        $output = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $content);
        $output = preg_replace('!//.*?\n!', '', $output);
        $output = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $output);
        return $output;
    }
    
}
