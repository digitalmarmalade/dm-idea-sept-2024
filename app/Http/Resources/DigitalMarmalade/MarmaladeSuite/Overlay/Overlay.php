<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Overlay;

/**
 * Provides a standardised methods of rendering overlays
 */
class Overlay
{
    private static $_includedTemplates = [];
    private static $_renderedOverlayItems = [];
    private static $_viewNameToIdRemapData = [];
    
    /**
     * Creates a new instance of OverlayItem
     * @return OverlayItem
     */
    public static function make()
    {
        return new OverlayItem();
    }
    
    public static function hasBeenRendered(OverlayItem $overlayItem)
    {
        return (in_array($overlayItem->getTemplate(), self::$_includedTemplates));
    }
    
    public static function addRendered(OverlayItem $overlayItem)
    {
        if (!self::hasBeenRendered($overlayItem)) {
            self::$_includedTemplates[] = $overlayItem->getTemplate();
            self::_updateViewData($overlayItem);
            return true;
        }
        return false;
    }
    
    private static function _updateViewData(OverlayItem $overlayItem)
    {
        self::$_viewNameToIdRemapData[$overlayItem->getName()] = $overlayItem->getId();
        view()->share(config('msuite.overlay.view.name_to_id_view_variable'), self::$_viewNameToIdRemapData);
    }
    
    public static function getIdFromName($name)
    {
        foreach (self::$_renderedOverlayItems as $overlayItem) {
            if ($overlayItem->getName() === $name) {
                return $overlayItem->getId();
            }
        }
        
        return '';
    }
    
    public static function __callStatic($name, $arguments)
    {
        $overlayItem = self::make();
        return call_user_func_array([$overlayItem, $name], $arguments);
    }
    
}
