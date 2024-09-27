<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * User model
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $dates = [
        'created_at',
        'updated_at'
    ];
}
