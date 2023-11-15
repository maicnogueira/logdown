<?php

namespace MaicNogueira\Logdown;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class LogDownProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot()
    {
        parent::boot();

        Route::get('/meu-pacote', function () {
            return 'Olá, mundo!';
        });

    }

    public function register()
    {


    }


}