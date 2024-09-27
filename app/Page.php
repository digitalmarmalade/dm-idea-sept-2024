<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Page model
 */
class Page extends Model
{
    use Http\Resources\DigitalMarmalade\Model\SortableTrait, Http\Resources\DigitalMarmalade\Model\SearchableTrait;
            
    protected $sortable = [
        'id',
        'name',
        'created_at',
        'updated_at'
    ];
    
    protected $searchable = [
        'name'
    ];
}
