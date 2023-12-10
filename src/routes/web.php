<?php

use Illuminate\Support\Facades\Route;
use LogDown\Controllers\TesteController;


Route::middleware('web')
    ->namespace(TesteController::class)
    ->group(function () {
        Route::get('/minha-rota', TesteController::class.'@index');
    });


