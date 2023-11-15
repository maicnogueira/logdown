<?php

namespace MaicNogueira\Logdown\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LogDownProvider
{

    public function register()
    {
        $this->app->singleton(Router::class, function () {
            return new Router();
        });
    }

    public function boot()
    {
        $router = $this->app->make(Router::class);

        $router->get('/logdown/list', function () {
            return 'Olá, mundo!';
        });
    }
}