<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\News\Filters;

class StatusFilterableItem extends \App\Http\Resources\DigitalMarmalade\Model\FilterableItemAbstract
{
    public function getAvailable()
    {
        return array_merge(['' => 'All Statuses'], \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\News\ArticleStatuses::get());
    }

    public function applyFilter(\Illuminate\Database\Eloquent\Builder $query)
    {
        $query->where('news_articles.status', $this->getValue());
    }

    public function getName()
    {
        return 'status';
    }
    
    public function setValue($value)
    {
        parent::setValue($this->valueToIntegerOrEmptyString($value));
    }

}
