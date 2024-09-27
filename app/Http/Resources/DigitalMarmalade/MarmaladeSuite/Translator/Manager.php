<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Translator;

use App;
use Waavi\Translation\Repositories\TranslationRepository;

class Manager
{
    
    private static $_namespace = '*';
    
    public static function addOrUpdate($group, $item, $value, $locale = null)
    {
        $usedLocale = $locale ?: App::getLocale();
        
        
        if (self::_hasTranslationId($group, $item, $usedLocale)) {
            self::_getTranslationRepository()->update(self::_getTranslationId($group, $item, $usedLocale), $value);
            
        } else {
            //if we have a new item and it's not saved in the default locale, save it in the default locale first
            if ($usedLocale !== config('app.fallback_locale') && !self::_hasTranslationId($group, $item, config('app.fallback_locale'))) {
                self::addOrUpdate($group, $item, $value, config('app.fallback_locale'));
            }
            //TODO - Throw exception on failure to save (returns null when it does not succeed)
            $result = self::_getTranslationRepository()->create(self::_getCreateTranslationArray($group, $item, $value, $usedLocale));
        }
    }
    
    public static function get($group, $item, $default = '')
    {
        if (trans()->hasForLocale($group . '.' . $item) ||
            trans()->hasForLocale($group . '.' . $item, config('app.fallback_locale')))
        {
            return trans()->get($group . '.' . $item, []);
        } else {
            return $default;
        }
    }
    
    private static function _getTranslationId($group, $item, $locale)
    {
        return self::_getTranslationBaseModel($group, $item, $locale)
            ->first()->id;
    }
    
    private static function _hasTranslationId($group, $item, $locale)
    {
        return (self::_getTranslationBaseModel($group, $item, $locale)
            ->count() ? true : false);
    }
    
    private static function _getTranslationBaseModel($group, $item, $locale)
    {
        return self::_getTranslationRepository()
            ->getModel()
            ->where('locale', $locale)
            ->where('namespace', self::$_namespace)
            ->where('group', $group)
            ->where('item', $item);
    }
    
    private static function _getCreateTranslationArray($group, $item, $value, $locale)
    {
        return [
            'locale' => $locale,
            'namespace' => '*',
            'group' => $group,
            'item' => $item,
            'text' => $value
        ];
    }
    
    private static function _getTranslationRepository()
    {
        return App::make(TranslationRepository::class);
    }
    
}
