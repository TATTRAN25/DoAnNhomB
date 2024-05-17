<?php

use App\Http\Controllers\CheckoutController;
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
Route::get('cart', [ProductController::class, 'cartDetail'])->name('products.cart');
Route::post('add-to-cart', [ProductController::class, 'addToCart'])->middleware('storePreviousUrl')->name('products.addToCart');
Route::post('cart/delete', [ProductController::class, 'deleteCart'])->name('cart.delete');
Route::post('cart/update', [ProductController::class, 'updateCart'])->name('cart.update');
Route::post('checkout', [CheckoutController::class, 'checkout'])->name('products.checkout');
Route::get('checkout-detail', [CheckoutController::class, 'showCheckoutPage'])->name('checkout.detail');
Route::post('checkout/process', [CheckoutController::class, 'processCheckout'])->name('checkout.process');
Route::get('order-success', [CheckoutController::class, 'showOrderSuccess'])->name('orders.success');
