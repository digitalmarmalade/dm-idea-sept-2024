<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Amsgames\LaravelShop\Traits\ShopUserTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use ShopUserTrait;
}
