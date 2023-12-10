<?php

use Illuminate\Support\Facades\Route;
use LogDown\Controllers\TesteController;

Route::group(['middleware' => ['web']], function () {
    Route::get('/minha-rota', TesteController::class.'@index');
});