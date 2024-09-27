<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items;

use \Illuminate\Support\Collection;

/**
 * @author tom
 */
class FaqItem extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Item
{
    
    protected $_viewTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.Items.View.faq';
    protected $_editTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.Items.Edit.faq';
    
    public function render()
    {
        return view($this->_viewTemplate, ['item' => $this, 'settings' => $this->getSettings()->get()]);
    }

    public function renderEdit()
    {
        return view($this->_editTemplate, ['item' => $this, 'settings' => $this->getSettings()->get()]);
    }

    public function update(Collection $data)
    {
        $this->_updateItems($data['items']);
        $this->_addQuestionIfRequired($data);
        $this->_deleteQuestionIfRequired($data);
    }
    
    private function _updateItems($items) {    
        $this->getSettings()->setFromArray($items);
    }
    
    private function _deleteQuestionIfRequired($data) {
        if (isset($data['deleteitem'])) {
            $this->getSettings()->deleteItem($data['deleteitem']);
        }
    }
    
    private function _addQuestionIfRequired($data) {
        if (isset($data['additem'])) {
            $this->getSettings()->addItem();
        }
    }

}