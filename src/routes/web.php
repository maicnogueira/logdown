<?php

Route::get('/logdown/list', function () {
    return 'Olá, mundo!';
})->middleware('web');