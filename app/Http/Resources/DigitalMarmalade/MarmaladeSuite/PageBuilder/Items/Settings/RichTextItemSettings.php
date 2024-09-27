<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings;

/**
 * @author tom
 */
class RichTextItemSettings extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemSettings
{
    
    use \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\TranslationSettingHelper;
    
    protected $_rules = [
        'text' => 'required|string|min:1'
    ];
    
    protected $_messages = [
        'text.required' => 'Rich text content must not be empty'
    ];
    
    protected $_settings = [
        'text' => 'Default Text'
    ];

}