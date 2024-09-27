<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module;

class NewsModule implements ModuleInterface
{
    public function getName()
    {
        return 'News';
    }

    public function getRouteName()
    {
        return 'msuiteNews';
    }
    
    public function getUrl()
    {
        return route($this->getRouteName());
    }

}
