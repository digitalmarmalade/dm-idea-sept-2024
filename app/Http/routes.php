<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->to('https://idea.org.uk');
    if (view()->exists('vendor.digitalmarmalade.puzzlelist')) {
        $git = str_replace('ref: refs/heads/', '', trim(file_get_contents('../.git/HEAD'))).' :: '.trim(file_get_contents('../.git/refs/heads/'.str_replace('ref: refs/heads/', '', trim(file_get_contents('../.git/HEAD')))));

        return view('vendor.digitalmarmalade.puzzlelist', compact('git'));
    }
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// badges
Route::post('/{badgeSlug}/api/{slugs}', ['uses' => 'badgesController@api'])->where('slugs', '[-/_a-z0-9]*');

Route::group(['middleware' => ['web']], function () {
    // game designer
    Route::get('/b/{gameUrl}', ['uses' => 'aDayInTheLifeOfAGameDesignerController@showGame'])->where('gameUrl', '[-_a-z0-9]*');
    //  auth
    Route::get('/{badgeSlug}/auth/login', ['uses' => 'badgesController@authLogin']);
    Route::get('/{badgeSlug}/auth/callback/', ['uses' => 'badgesController@authCallback']);
    Route::get('/{badgeSlug}/auth/logout', ['uses' => 'badgesController@authLogout']);
    Route::get('/{badgeSlug}/auth/test', ['uses' => 'badgesController@authTest']);
    //  api dump
    Route::get('/{badgeSlug}/apidump', ['uses' => 'badgesController@apiDump']);
    //  general
    Route::get('/{badgeSlug}', ['uses' => 'badgesController@home']);
    Route::get('/{badgeSlug}/step-{step}', ['uses' => 'badgesController@step']);
    Route::get('/{badgeSlug}/step-{step}/overlay-{overlay}', ['uses' => 'badgesController@overlay']);
    Route::get('/{badgeSlug}/success', ['uses' => 'badgesController@success']);
    Route::get('/{badgeSlug}/summary', ['uses' => 'badgesController@summary']);
    Route::get('/{badgeSlug}/submit', ['uses' => 'badgesController@submit']);
    Route::post('/{badgeSlug}/publish', ['uses' => 'badgesController@publish']);
    Route::post('/{badgeSlug}/save-data', ['uses' => 'badgesController@sendDataToApi']);
    Route::get('/{badgeSlug}/{slugs}', ['uses' => 'badgesController@catchall'])->where('slugs', '[-/_a-z0-9]*');
});
