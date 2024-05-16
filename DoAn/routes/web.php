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

Route::get('productmanagement', [ProductController::class, 'productManagement'])->name('product.productManagement');

Route::post('/filter-products', [ProductController::class, 'filterProducts'])->name('filter.products');

Route::get('addproduct', [ProductController::class, 'addProduct'])->name('product.addProduct');
Route::post('addproduct', [ProductController::class, 'store'])->name('product.store');

Route::get('editproduct/{product_id}', [ProductController::class, 'editProduct'])->name('product.editProduct');
Route::put('editproduct/{product_id}', [ProductController::class, 'update'])->name('product.update');

Route::delete('deleteproduct/{id}', [ProductController::class, 'deleteProduct'])->name('product.deleteProduct');

Route::get('detailproduct', [ProductController::class, 'detailProduct'])->name('user.detailproduct');

Route::get('/', function () {
    return view('welcome');
});
