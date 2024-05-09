<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\UserController::class, 'index']);
Route::resource('user', \App\Http\Controllers\UserController::class);