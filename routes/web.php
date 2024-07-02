<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/simple', function () {
    return view('simple');
});

Route::get('/current-time', 'TimeController@showCurrentTime');


// Route::get('/dbview', function () {
//     return view('dbview');
// });
Route::get('/users', [UserController::class, 'index']);