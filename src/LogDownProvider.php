<?php

namespace LogDown;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;


class LogDownProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

    }

    public function register()
    {


    }


}