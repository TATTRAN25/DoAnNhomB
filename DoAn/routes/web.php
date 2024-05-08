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
Route::get('tat', [ProductController::class, 'tat']);

Route::get('productmanagement', [ProductController::class, 'productManagement'])->name('user.productmanagement');

Route::get('/', function () {
    return view('welcome');
});
