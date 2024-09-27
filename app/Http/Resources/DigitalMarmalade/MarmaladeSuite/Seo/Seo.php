<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo;

use App\Seos;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo\SeoItem;

/**
 * Provides an interface into the seos data
 */
class Seo
{
    
    /**
     * Create a new SEO item and return it
     * @param string $name
     * @return SeoItem
     */
    public static function create($name)
    {
        $seo = Seos::create(['name' => $name]);
        return self::load($seo->id);
    }
    
    /**
     * Loads an existing SEO Item
     * @param integer $id
     * @return \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Seo\SeoItem
     */
    public static function load($id)
    {
        return new SeoItem($id);
    }
    
    /**
     * Deletes an SEO Item
     * @param integer $id
     * @return boolean
     */
    public static function delete($id)
    {
        return Seos::findOrFail($id)->delete();
    }
    
}