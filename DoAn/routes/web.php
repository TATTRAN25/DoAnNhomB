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

Route::get('home', [ProductController::class, 'home'])->name('home');
Route::get('products', [ProductController::class, 'getProducts'])->name('products');
Route::get('product-detail/{productId}', [ProductController::class, 'getProductDetail'])->name('products.detail');
Route::get('product-search', [ProductController::class, 'search'])->name('products.search');
