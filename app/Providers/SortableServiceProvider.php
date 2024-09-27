<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SortableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\NewsArticle::
        $this->app['events']->listen('eloquent.creating*', function ($model) {
             die('aa');
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
