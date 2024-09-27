<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite;

use App\Http\Controllers\Controller;
use Request;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Navigation\Navigation;

/**
 * Top level abstract controller for the Marmalade Suite controllers which handles the navigation
 */
abstract class MarmaladeSuiteControllerAbstract extends Controller
{
    protected $navigation;
    
    public function __construct()
    {
        $this->navigation = new Navigation();
        $this->navigation->addModuleNavigationSections();
        view()->share('navigation', $this->navigation);
    }
    
}
