<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Navigation;

use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Module\Modules;
use Illuminate\Support\Facades\Request;

class Navigation
{
    private $activeUrl;
    private $navigationSections = [];
    
    public function __construct()
    {
        $this->setActiveUrl(Request::url());
    }
    
    public function get()
    {
        return $this->navigationSections;
    }
    
    public function deleteNavigationSections()
    {
        $this->navigationSections = [];
        return $this;
    }
    
    public function deleteNavigationSection(NavigationSection $deleteNavigationSection)
    {
        foreach ($this->navigationSections as $index => $navigationSection) {
            if ($navigationSection === $deleteNavigationSection) {
                array_splice($this->navigationSections, $index, 1);
                break;
            }
        }
        return $this;
    }
    
    public function addNavigationSection(NavigationSection $navigationSection)
    {
        $this->navigationSections[] = $navigationSection;
        return $this;
    }
    
    public function addModuleNavigationSections()
    {
        foreach (Modules::all() as $module) {
            $this->navigationSections[] = new NavigationSection($this, $module->getName(), $module->getUrl());
        }
        return $this;
    }
    
    public function setActiveUrl($activeUrl)
    {
        $this->activeUrl = $activeUrl;
        return $this;
    }
    
    public function getActiveUrl()
    {
        return $this->activeUrl;
    }
    
}
