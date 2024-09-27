<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings;

/**
 * @author tom
 */
class ProfileListItemSettings extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemSettings
{
    
    protected $_rules = [
        'role' => 'required|array',
        'role.*' => 'integer|exists:people_roles,id',
        'level' => 'required|array',
        'level.*' => 'integer|exists:people_levels,id',
        'sport' => 'required|array',
        'sport.*' => 'integer|exists:sports,id',
    ];
    
    protected $_messages = [
    ];
    
    protected $_settings = [
        'role' => [1],
        'level' => [1],
        'sport' => [1]
    ];

}