<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'homeProduct'])->name('home_products');
Route::get('/products/cart_details', [CartController::class, 'cartDetail'])->name('products.cart');
Route::get('/products/checkout', [CartController::class, 'checkoutProduct'])->name('products.checkout');
