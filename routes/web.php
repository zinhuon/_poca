<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/simple', function () {
    return view('simple');
});

Route::get('/current-time', 'TimeController@showCurrentTime');

