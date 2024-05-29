<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home','HomeController@index'); Laravel version 6 - 9

// Laravel 11
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/product/{id}', function ($id) {
    return [$id];
});