<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\Items\Settings;

/**
 * @author tom
 */
class NewsArticleItemSettings extends \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\PageBuilder\ItemSettings
{
    
    protected $_rules = [
        'articleId' => 'required|exists:news_articles,id',
    ];
    
    protected $_settings = [
        'articleId' => null
    ];

}