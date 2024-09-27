<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module;

class TranslationModule implements ModuleInterface
{
    public function getName()
    {
        return 'Translations';
    }

    public function getRouteName()
    {
        return 'msuiteTranslations';
    }
    
    public function getUrl()
    {
        return route($this->getRouteName());
    }

}
