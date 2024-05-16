<?php

use App\Http\Controllers\CrudProductController;
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

Route::get('productmanagement', [CrudProductController::class, 'productManagement'])->name('product.productManagement');

Route::post('/filter-products', [CrudProductController::class, 'filterProducts'])->name('filter.products');

Route::get('addproduct', [CrudProductController::class, 'addProduct'])->name('product.addProduct');
Route::post('addproduct', [CrudProductController::class, 'store'])->name('product.store');

Route::get('editproduct/{product_id}', [CrudProductController::class, 'editProduct'])->name('product.editProduct');
Route::put('editproduct/{product_id}', [CrudProductController::class, 'update'])->name('product.update');

Route::delete('deleteproduct/{id}', [CrudProductController::class, 'deleteProduct'])->name('product.deleteProduct');

Route::get('/', function () {
    return view('welcome');
});
