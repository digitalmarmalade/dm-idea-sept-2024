<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

use DigitalMarmalade\PageBuilder\PageBuilder;
use DigitalMarmalade\PageBuilder\PageLoaderInterface;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemLoader;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\PageLoader;

/**
 * A supporting trait providing helpful methods when dealing with the PageBuilder implementation
 */
trait PageBuilderHelper
{
    
    /**
     * Get an instance of the PageBuilder
     * @param PageLoaderInterface $pageLoader optional
     * @return \DigitalMarmalade\PageBuilder\PageBuilder
     */
    protected function _getPageBuilder(PageLoaderInterface $pageLoader = null)
    {
        $pageLoaderInstance = ($pageLoader === null) ? new PageLoader() : $pageLoader;
        return new PageBuilder('\App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Page', $pageLoaderInstance);
    }
    
    protected function _getNewItemInstanceFromItemConfigId($itemConfigId, $itemLoader = ItemLoader::class)
    {
        $itemData = $this->_getItemData($itemConfigId);
        return $this->_getNewItemInstance($itemData['class'], $itemData['settingsclass'], $itemLoader);
    }
    
    /**
     * Gets a new instance of the class with the settingsClass
     * @param string $class
     * @param string $settingsClass
     * @return \DigitalMarmalade\PageBuilder\ItemInterface
     */
    protected function _getNewItemInstance($class, $settingsClass, $itemLoader = ItemLoader::class)
    {
        return new $class(
            new $itemLoader,
            new $settingsClass
        );
    }
    
    /**
     * Gets information about the item using the item config id (which is the index of the item in the items config file)
     * @param integer $itemConfigId
     * @return array
     */
    protected function _getItemData($itemConfigId, $notFoundError = 'The requested widget does not exist')
    {
        $availableItems = config('msuite.app.pagebuilder.items');
        if (!isset($availableItems[$itemConfigId])) {
            throw new \ErrorException($notFoundError);
        }
        return $availableItems[$itemConfigId];
    }
    
    
    
}
