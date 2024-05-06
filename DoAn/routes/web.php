<?php

use App\Http\Controllers\UserController;
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
Route::get('home', [UserController::class, 'home'])->name('user.home');
Route::get('store', [UserController::class, 'store'])->name('user.store');

Route::get('/', function () {
    return view('welcome');
});
