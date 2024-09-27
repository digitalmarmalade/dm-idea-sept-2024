<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items;

use DigitalMarmalade\Wysiwyg\WysiwygInput;

/**
 * @author tom
 */
class RichTextItem extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Item
{    
    protected $_viewTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.Items.View.richText';
    protected $_editTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.Pages.Items.Edit.richText';
    
    public function render()
    {
        return view($this->_viewTemplate, ['item' => $this, 'settings' => $this->getSettings()->get()]);
    }

    public function renderEdit()
    {
        $this->getSettings()->get();
        return view($this->_editTemplate, ['item' => $this, 'settings' => $this->getSettings()->get()]);
    }

    public function update($data)
    {
        $settings = $this->getSettings();
        $wysiwyg = new WysiwygInput();
        $settings->set('text', $wysiwyg->sanitize($data->get('text', '')));
    }

}