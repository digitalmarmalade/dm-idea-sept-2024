<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module;

interface ModuleInterface
{
    
    /**
     * @return String
     */
    public function getName();

    /**
     * @return String
     */
    public function getRouteName();
    
    /**
     * @return String
     */
    public function getUrl();
    
}
