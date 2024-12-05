<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', function () {
    return view('example');
});

Route::get('/shop/register', function () {
    return view('shop.register');
});

Route::post('/shop/create', [ShopController::class, 'create']);

Route::get('/shop/display', [ShopController::class, 'display']);
