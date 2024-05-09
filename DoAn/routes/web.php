<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
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

Route::get('tat', [ProductController::class, 'tat']);

Route::get('productmanagement', [ProductController::class, 'productManagement'])->name('user.productmanagement');

Route::get('addproduct', [ProductController::class, 'addProduct'])->name('user.addproduct');

Route::get('editproduct', [ProductController::class, 'editProduct'])->name('user.editproduct');

Route::get('/home', [HomeController::class, 'homeProduct'])->name('home_products');
Route::get('/products/cart_details', [CartController::class, 'cartDetail'])->name('products.cart');
Route::get('/products/checkout', [CartController::class, 'checkoutProduct'])->name('products.checkout');

Route::get('/', function () {
    return view('welcome');
});

