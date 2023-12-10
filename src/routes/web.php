<?php

use Illuminate\Support\Facades\Route;
use LogDown\Controllers\TesteController;


    Route::get('/minha-rota', TesteController::class.'@index');
