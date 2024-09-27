<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

/**
 * Description of PageBuilder
 *
 * @author tom
 */
class PageBuilder extends \DigitalMarmalade\PageBuilder\PageBuilder
{
    private $_pageClass = 'App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Page';
    
    public function __construct($pageClass = null, PageLoaderInterface $pageLoader = null)
    {
        parent::__construct($this->_pageClass, new \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\PageLoader);
    }
    
    public static function render($pageId)
    {
        return self::_getInstance()->getPage($pageId)->render();
    }
    
    public static function renderEdit($pageId)
    {
        return self::_getInstance()->getPage($pageId)->renderEdit();
    }
    
    private static function _getInstance()
    {
        return new static();
    }
}
