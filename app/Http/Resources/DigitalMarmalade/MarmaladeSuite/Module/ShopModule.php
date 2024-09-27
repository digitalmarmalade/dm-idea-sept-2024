<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module;

class ShopModule implements ModuleInterface
{
    public function getName()
    {
        return 'Shop';
    }

    public function getRouteName()
    {
        return 'msuiteShop';
    }
    
    public function getUrl()
    {
        return route($this->getRouteName());
    }

}
