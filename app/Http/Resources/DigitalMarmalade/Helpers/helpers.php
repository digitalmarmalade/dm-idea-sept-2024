<?php

use App\Http\Resources\DigitalMarmalade\Blade\Inline;

if (!function_exists('relative_path')) {
    function relative_path($path)
    {
        
        if (substr($path, 0, strlen(base_path())) === base_path()) {
            return ltrim(substr($path, strlen(base_path())), DIRECTORY_SEPARATOR);
        } else {
            throw new Exception('Cannot create relative path, path ' . $path . ' is not in base_path');
        }
    }
}

if (!function_exists('inlineAsset')) {
    function inlineAsset($assetPath, $type = null)
    {
        if ($type !== null) {
            if ($type === 'js') {
                echo Inline::js($assetPath);
            } elseif ($type === 'css') {
                echo Inline::css($assetPath);
            } else {
                throw new ErrorException('Cannot add inline asset ' . $assetPath . ', invalid type provided.');
            }
        } else {
            if (strtolower(substr($assetPath, -3)) === '.js') {
                echo Inline::js($assetPath);
            } elseif (strtolower(substr($assetPath, -4)) === '.css') {
                echo Inline::css($assetPath);
            } else {
                throw new ErrorException('Cannot add inline asset ' . $assetPath . ', no type provided and cannot infer type from extension.');
            }

        }
    }
}

if (!function_exists('coalesce')) {
    function coalesce($value, $default = '')
    {
        return ($value ? $value : $default);
    }
}