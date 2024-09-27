<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Navigation;

class NavigationSection
{
    private $name;
    private $url;
    private $navigation;
    
    public function __construct(Navigation $navigation, $name, $url)
    {
        $this->navigation = $navigation;
        $this->name = $name;
        $this->url = $url;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getUrl()
    {
        return $this->url;
    }
    
    public function isActive()
    {
        return $this->url === $this->navigation->getActiveUrl();
    }
    
}
