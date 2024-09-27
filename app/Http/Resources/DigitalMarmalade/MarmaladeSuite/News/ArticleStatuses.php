<?php

namespace App\Http\Resources\DigitalMarmalade\MarmaladeSuite\News;

/**
 * Provides functions associated with the status of news articles
 */
class ArticleStatuses
{
    
    const STATUS_PENDING = 0;
    const STATUS_PUBLISHED = 1;
    const STATUS_ARCHIVED = 2;
    
    protected static $_statuses = [
        0 => 'Pending',
        1 => 'Published',
        2 => 'Archived'
    ];
    
    /**
     * Gets an array of available statuses as an array of statusId => statusName
     * @return array
     */
    public static function get()
    {
        return self::$_statuses;
    }
    
    /**
     * Gets the name of the specified status id
     * @param integer $id
     * @return string
     */
    public static function getName($id)
    {
        return (isset(self::$_statuses[$id]) ? self::$_statuses[$id] : '');
    }
    
    
}
