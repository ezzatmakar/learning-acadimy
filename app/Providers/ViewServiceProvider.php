<?php

namespace App\Providers;

use App\Cat;
use Illuminate\Support\ServiceProvider;
use function Sodium\compare;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.inc.header', function ($view){
           $view->with('cats', Cat::select('id', 'name')->get());
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
