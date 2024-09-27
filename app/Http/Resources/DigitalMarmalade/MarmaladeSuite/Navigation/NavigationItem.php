<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Navigation;

class NavigationItem
{
    
    private $_item;
    private $_activeRoute;
    
    public function __construct($item, $activeRoute)
    {
        $this->_item = $item;
        $this->_activeRoute = $activeRoute;
    }
    
    public function getName()
    {
        return $this->_item['name'];
    }
    
    public function getUrl()
    {
        return isset($this->_item['url']) ? $this->_item['url'] : route($this->_item['route']);
    }
    
    public function isActive()
    {
        return (isset($this->_item['route']) && $this->_item['route'] === $this->_activeRoute);
    }
}
