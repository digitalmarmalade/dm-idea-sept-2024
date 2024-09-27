<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module;

interface ModuleControllerInterface
{
    /**
     * Returns name of module class for the controller
     * @return String
     */
    public static function getModule();
}
