<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

use DigitalMarmalade\PageBuilder\PageBuilder;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Page;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\SessionPageLoader;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\SessionItemLoader;
use Illuminate\Support\Facades\Input;

trait SessionPageBuilderTrait {
    
    protected function getNewSessionPage()
    {
        $page = $this->getSessionPageBuilder()->getNewPage(new SessionItemLoader);
        $page->create();
        return $page;
    }
    
    /**
     * If we have a sessionPageId input variable then get the existing page, otherwise get a new session page
     */
    protected function getExistingOrNewSessionPage()
    {
        $sessionPageId = Input::get('sessionPageId', old('sessionPageId', null));
        if ($sessionPageId) {
            return $this->getSessionPageBuilder()->getPage($sessionPageId);
        } else {
            return $this->getNewSessionPage();
        }
    }
    
    protected function getSessionPageBuilder()
    {
        return new PageBuilder(
            Page::class,
            new SessionPageLoader()
        );
    }
    
}