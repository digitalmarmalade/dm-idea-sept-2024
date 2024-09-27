<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite;

use App\Http\Controllers\Controller;
use App\TranslatorTranslation;
use Illuminate\Http\Request;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Translator\Manager as TranslationManager;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Translations\Groups;
use App\Http\Resources\DigitalMarmalade\Model\ListerRouting;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Translations\GroupFilterableItem;

/**
 * Controller for the Marmalade Suite homepage
 */
class TranslationController extends MarmaladeSuiteControllerAbstract
{
    
    protected $editTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Translations.edit';
    
    protected $_rules = [
        'translations' => 'array',
        'translations.*' => 'array',
        'translations.*.*' => 'array',
        'translations.*.*.*' => 'string'
    ];

    public function edit()
    {
        $altLocale = $this->getDefaultAltLocale();
        
        $translations = new TranslatorTranslation;
        $routingData = new ListerRouting($translations);
        $filterableInterfaces = [
            'group' => new GroupFilterableItem()
        ];
        
        $translationPaginator = $translations
            ->select(
                'translator_translations.text as english_text',
                'translator_translations_alt.text as alt_text',
                'translator_translations.item',
                'translator_translations.group'
            )
            ->leftJoin('translator_translations as translator_translations_alt', function($join) use ($altLocale) {
                $join->on('translator_translations_alt.item', '=', 'translator_translations.item');
                $join->where('translator_translations_alt.locale', '=', $altLocale['code']);
            })
            ->whereIn('translator_translations.group', Groups::getGroups())
            ->where('translator_translations.locale', '=', config('app.fallback_locale'))
            ->orderBy('translator_translations.text', 'ASC')
            ->searchable()
            ->filterable($filterableInterfaces)
            ->paginate(15);
        
        
        return view($this->editTemplate, [
            'translations' => Groups::formatTranslationPaginatorGroupNames($translationPaginator),
            'altLocale' => $altLocale,
            'routingData' => $routingData,
            'filterable' => $filterableInterfaces
        ]);
        
    }
    
    public function update(Request $request)
    {
        $this->validate($request, $this->_rules);
        
        $translations = $request->get('translations');
        
        foreach ($translations as $group => $items) {
            foreach ($items as $item => $itemLocales) {
                foreach ($itemLocales as $locale => $value) {
                    if (strlen($value)) {
                        TranslationManager::addOrUpdate($group, $item, $value, $locale);
                    }
                }
            }
        }
        
        return redirect()->back()->with('success', 'The translations have been updated successfully.');
    }
    
    protected function getDefaultAltLocale()
    {
        $availableLocales = $this->getAvailableLocales();
        $availableLocaleCodes = array_keys($availableLocales);
        foreach ($availableLocaleCodes as $code) {
            if ($code !== config('app.fallback_locale')) {
                return array_merge($availableLocales[$code], ['code' => $code]);
            }
        }
        throw new Exception('Cannot get default alt locale, none available.');
    }
    
    protected function getAvailableLocales()
    {
        return config('laravellocalization.supportedLocales');
    }
        
}
