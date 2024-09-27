<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module;

class UserModule implements ModuleInterface
{
    public function getName()
    {
        return 'Users';
    }

    public function getRouteName()
    {
        return 'msuiteUsers';
    }
    
    public function getUrl()
    {
        return route($this->getRouteName());
    }

}
