<?php

namespace LogDown;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use LogDown\Controllers\TesteController;


class LogDownProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot()
    {
        $content = __DIR__.'/routes/web.php';
        file_put_contents("./teste.txt", $content);

        $this->publishes([
            __DIR__.'/config/logdown.php' => config_path('logdown.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

    }

    public function register()
    {
        $this->app->register(LogDownProvider::class);

    }


}