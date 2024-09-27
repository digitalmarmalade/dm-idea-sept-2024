<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings;

/**
 * @author tom
 */
class NewsTeasersItemSettings extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemSettings
{
    
    protected $_rules = [
        'number' => 'required|integer|between:1,10',
        'categories' => 'required|array',
        'categories.*' => 'exists:news_categories,id',
        'levels' => 'required|array',
        'levels.*' => 'exists:news_levels,id',
    ];
    
    protected $_messages = [
        'number.required' => 'The number of news teasers is required',
        'number.integer' => 'The number of news teasers must be a number',
        'number.between' => 'The number of news teasers must be between 1 and 10',
        'categories.required' => 'At least 1 category is required',
        'levels.required' => 'At least 1 level is required'
    ];
    
    protected $_settings = [
        'categories' => [1],
        'levels' => [1, 2],
        'number' => 5,
    ];

}