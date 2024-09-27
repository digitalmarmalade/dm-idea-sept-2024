<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Translations;

use Illuminate\Pagination\LengthAwarePaginator;

class Groups
{
    public static function getGroups()
    {
        return config('msuite.translations.editableGroups');
    }
    
    public static function getDisplayGroups()
    {
        return array_map([self, '_getDisplayName'], self::getGroups());
    }
    
    public static function formatTranslationPaginatorGroupNames(LengthAwarePaginator $translationPaginator)
    {
        foreach ($translationPaginator as $translation) {
            $translation->displayGroup = self::getDisplayName($translation->group);
        }
        return $translationPaginator;
    }
    
    public static function getDisplayName($groupName)
    {
        return ucwords(str_replace('_', ' ', $groupName));
    }
    
}
