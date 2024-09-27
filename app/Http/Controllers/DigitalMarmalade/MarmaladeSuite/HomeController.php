<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite;

/**
 * Controller for the Marmalade Suite homepage
 */
class HomeController extends MarmaladeSuiteControllerAbstract
{

    /**
     * Outputs the homepage template
     * @return string
     */
    public function home(\Waavi\Translation\Repositories\TranslationRepository $translation)
    {
        return view('vendor.digitalmarmalade.MarmaladeSuite.home');
    }

}
