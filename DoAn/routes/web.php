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


Route::get('productmanagement', [ProductController::class, 'productManagement'])->name('user.productmanagement');

Route::get('addproduct', [ProductController::class, 'addProduct'])->name('user.addproduct');

Route::get('editproduct', [ProductController::class, 'editProduct'])->name('user.editproduct');

Route::get('cart', [ProductController::class, 'cart'])->name('user.cart');

Route::get('detailproduct', [ProductController::class, 'detailProduct'])->name('user.detailproduct');


Route::get('/', function () {
    return view('welcome');
});
