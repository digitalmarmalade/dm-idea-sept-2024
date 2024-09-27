<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Http\Resources\DigitalMarmalade\Blade\Extension;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['request']->server->set('HTTPS', env('FORCE_SSL', false));

        Validator::extend('after_field', function($attribute, $value, $parameters, $validator) {
            $data = $validator->getData();
            $mustBeAfter = isset($data[$parameters[0]]) ? $data[$parameters[0]] : date('Y-m-d H:i:s', 0);
            return Carbon::parse($value) > Carbon::parse($mustBeAfter);
        });
        
        Validator::extend('array_keys_in', function($attribute, $value, $parameters, $validator) {
            $arrayKeys = array_keys($value);
            
            array_walk($parameters, function($allowedArrayKey) {
                return (string)$allowedArrayKey;
            });
            
            foreach ($arrayKeys as $arrayKey) {
                if (!in_array((string)$arrayKey, $parameters, true)) {
                    return false;
                }
            }
            
            return true;
        });
        
        view()->composer('*', function ($view) {
            view()->share('viewPath', $view->getName());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
