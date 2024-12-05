<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function () {
    return view('example');
});

Route::post('/create', [ShopController::class, 'create']);

Route::get('/register', function () {
    return view('register');
});
