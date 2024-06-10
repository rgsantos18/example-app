<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home','HomeController@index'); Laravel version 6 - 9

// Laravel 11
Route::controller(HomeController::class)->group(function () {
    Route::get('/home', 'index');
});

Route::controller(ProductController::class)->group(function () {
   Route::get('/product', 'index'); // function index()
   Route::get('/product/add', 'create'); // function create()
   Route::post('/product', 'store'); // function store()
   Route::get('/product/{id}', 'show'); // function show($id)
   // Route::get('/product/{id}/edit', 'edit');
});