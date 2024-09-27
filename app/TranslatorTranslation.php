<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Resources\DigitalMarmalade\Model\FilterableTrait;

class TranslatorTranslation extends Model
{
    use FilterableTrait, Http\Resources\DigitalMarmalade\Model\SearchableTrait;
    
    protected $searchable = [
        'text'
    ];
}