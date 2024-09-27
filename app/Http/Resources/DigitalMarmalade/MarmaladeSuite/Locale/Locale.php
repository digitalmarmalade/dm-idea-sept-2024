<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Locale;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class Locale
{
    
    public static function getAvailable()
    {
        $availableLocales = config('laravellocalization.supportedLocales');
        foreach ($availableLocales as $code => &$locale) {
            $locale['route'] = self::routeFor($code);
        }
        return $availableLocales;
    }
    
    public static function routeFor($locale)
    {
        $prefix = Route::current()->getPrefix();
        
        if (null !== $qs = Request::getQueryString()) {
            $qs = '?'.$qs;
        }

        if ($locale === config('app.fallback_locale')) {
            if ($prefix === null) {
                $path = Request::getPathInfo();
            } else {
                $path = substr(Request::getPathInfo(), strlen($prefix));
            }
        } else {
            if ($prefix === null) {
                $path = '/' . $locale . Request::getPathInfo();
            } else {
                $path = '/' . $locale . substr(Request::getPathInfo(), strlen($prefix));
            }
        }
        
        return Request::getSchemeAndHttpHost().Request::getBaseUrl().$path.$qs;
    }
    
}
