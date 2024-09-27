<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);
        
        $router->model('articleId', 'App\NewsArticle');
        $router->model('userId', 'App\User');
        $router->model('imageId', 'App\Image');
        $router->bind('productId', function($productId) {
            $productModel = \App\Product::find($productId);
            return new \App\Http\Resources\DigitalMarmalade\MarmaladeSuite\Shop\Product($productModel);
        });
        $router->model('productVariationId', 'App\ProductVariation');
        $router->model('orderId', 'App\Order');
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function ($router) {
            require app_path('Http/routes.php');
        });
    }
}
