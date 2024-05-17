<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\ProductController;

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

Route::get('MaGiamGia', [UserController::class, 'MaGiamGia'])->name('user.MaGiamGia');

Route::get('ranking', [UserController::class, 'ranking'])->name('user.ranking');





Route::get('/', function () {
    return view('welcome');
});
//route('product.index');   


Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');



Route::resource('vouchers', VoucherController::class);

Route::post('/vouchers', [VoucherController::class, 'store'])->name('voucher.store');

Route::get('/vouchers', [VoucherController::class, 'index'])->name('vouchers.index');

Route::get('/vouchers/create', [VoucherController::class, 'create'])->name('vouchers.create');

Route::post('/store-voucher', [VoucherController::class, 'store'])->name('voucher.store');
