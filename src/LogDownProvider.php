<?php

namespace MaicNogueira\Logdown;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class LogDownProvider extends ServiceProvider implements DeferrableProvider
{

    public function register()
    {
        Route::get('/logdown/list', function () {
            return 'Olá, mundo!';
        })->middleware('web');
    }

    public function boot()
    {
//        $router = $this->app->make(Router::class);

//        Route::get('/logdown/list', function () {
//            return 'Olá, mundo!';
//        })->middleware('web');
    }
}