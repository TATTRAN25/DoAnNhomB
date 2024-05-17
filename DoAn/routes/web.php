<?php


use App\Http\Controllers\CrudUserController;

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

Route::controller(CrudUserController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authUser')->name('auth.user');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'postRegister')->name('post.register');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/account', 'viewAccountInfo')->name('account');
    Route::get('/list_user', 'listUser')->name('user.list');
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [ProductController::class, 'home'])->name('home');
