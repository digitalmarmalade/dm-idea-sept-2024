<?php

namespace App\Http\Controllers\DigitalMarmalade\MarmaladeSuite;

use App\NewsArticle;
use App\Http\Resources\DigitalMarmalade\MarmaladeSuite\News\ArticleStatuses;
use App\Http\Resources\DigitalMarmalade\Model\ListerRouting;

/**
 * Controller for the news article list pages
 */
class NewsController extends MarmaladeSuiteControllerAbstract
{
    
    protected $_listTemplate = 'vendor.digitalmarmalade.MarmaladeSuite.News.list';
    
    /**
     * Displays the list of news articles
     * @return string
     */
    public function listArticles()
    {
        $news = new NewsArticle();
        $routingData = new ListerRouting($news);
        
        $filterableInterfaces = [
            'status' => new \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\News\Filters\StatusFilterableItem()
        ];
        
        $newsArticles = $news->sortable()->searchable()->filterable($filterableInterfaces)->paginate(15);
        return view($this->_listTemplate, [
            'news' => $newsArticles,
            'routingData' => $routingData,
            'filterable' => $filterableInterfaces
        ]);
    }
    
}
