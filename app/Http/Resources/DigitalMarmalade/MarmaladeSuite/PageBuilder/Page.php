<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder;

/**
 * @author tom
 */
class Page extends \DigitalMarmalade\PageBuilder\Page
{
    protected $_editView = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.edit';
    
    private $_name;
    private $_seo;
    
    public function setName($name)
    {
        $this->_name = $name;
    }
    
    public function getName()
    {
        return strlen($this->_name) ? $this->_name : '';
    }
    
    public function setSeo($seo)
    {
        $this->_seo = $seo;
    }
    
    public function getSeo()
    {
        return $this->_seo;
    }
    
    /**
     * Saves the page using the PageBuilderPageLoaderInterface specified in the constructor and returns the unique id returned by the loader
     * @return mixed
     */
    public function save() {
        $this->_id = $this->_pageLoader->save($this, $this->getId());
        return $this->_id;
    }
    
    public function reorderItems(array $orderedItemIds) {
        $resortedItems = [];
        while (count($orderedItemIds) > 0) {
            foreach ($this->_items as $arrayIndex => $item) {
                if ($item->getId() === $orderedItemIds[0]) {
                    $resortedItems[] = $item;
                    array_shift($orderedItemIds);
                    array_splice($this->_items, $arrayIndex, 1);
                    continue 2;
                }
            }
            break; //no items matched, break out of the loop to prevent an infinite loop
        }
        array_merge($resortedItems, $this->_items);
        $this->_items = $resortedItems;
    }

}
