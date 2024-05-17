<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(ProductController::class)->group(function () {
    Route::get('home', 'home')->name('home');
    Route::get('products', 'getProducts')->name('products');
    Route::get('product-detail/{productId}', 'getProductDetail')->name('products.detail');
    Route::get('product-search', 'search')->name('products.search');
    Route::get('cart', 'cartDetail')->name('products.cart');
});
