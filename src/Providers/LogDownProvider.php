<?php

namespace MaicNogueira\Logdown\Providers;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class LogDownProvider extends ServiceProvider implements DeferrableProvider
{

    public function register()
    {
//        $this->app->singleton(Router::class, function () {
//            return new Router();
//        });
    }

    public function boot()
    {
//        $router = $this->app->make(Router::class);

        Route::get('/logdown/list', function () {
            return 'Olá, mundo!';
        });
    }
}