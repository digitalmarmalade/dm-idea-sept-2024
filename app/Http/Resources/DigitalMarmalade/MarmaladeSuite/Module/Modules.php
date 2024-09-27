<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module;

class Modules
{
    public static function all()
    {
        $modules = [];
        foreach (self::getModulesList() as $moduleClass) {
            $modules[] = self::get($moduleClass);
        }
        return $modules;
    }
    
    public static function get($moduleClass)
    {
        return new $moduleClass;
    }
    
    public static function has($moduleClass)
    {
        return in_array($moduleClass, self::getModulesList(), true);
    }
    
    private static function getModulesList()
    {
        return config('msuite.app.modules');
    }
        
}
