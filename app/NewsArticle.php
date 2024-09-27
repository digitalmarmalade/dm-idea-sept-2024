<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * NewsArticle model
 */
class NewsArticle extends Model
{
    use Http\Resources\DigitalMarmalade\Model\SortableTrait,
        Http\Resources\DigitalMarmalade\Model\SearchableTrait,
        Http\Resources\DigitalMarmalade\Model\FilterableTrait,
        \Waavi\Translation\Traits\Translatable;
    
    protected $fillable = [
        'title',
        'author',
        'status'
    ];
    
    protected $casts = [
        'status' => 'integer'
    ];
    
    protected $sortable = [
        'updated_at',
        'title',
        'status'
    ];
    
    protected $searchable = [
        'title'
    ];
    
    protected $translatableAttributes = ['title'];
    
}
