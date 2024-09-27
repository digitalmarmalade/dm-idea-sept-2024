<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module;

class PageModule implements ModuleInterface
{
    public function getName()
    {
        return 'Pages';
    }

    public function getRouteName()
    {
        return 'msuitePages';
    }
    
    public function getUrl()
    {
        return route($this->getRouteName());
    }

}
