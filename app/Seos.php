<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Seos model
 */
class Seos extends Model
{
    
    use \Waavi\Translation\Traits\Translatable;
    
    protected $fillable = ['name', 'title', 'keywords', 'description'];
    
    protected $translatableAttributes = ['title', 'keywords', 'description'];
    
}
