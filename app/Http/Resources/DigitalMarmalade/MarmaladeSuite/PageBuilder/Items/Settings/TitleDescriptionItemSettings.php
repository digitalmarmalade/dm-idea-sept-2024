<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings;

/**
 * @author tom
 */
class TitleDescriptionItemSettings extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemSettings
{
    use \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\TranslationSettingHelper;
    
    protected $_rules = [
        'title' => 'required|string|min:1',
        'description' => 'required|string'
    ];
    
    protected $_settings = [
        'title' => 'Default Title',
        'description' => 'Default Description',
    ];

}