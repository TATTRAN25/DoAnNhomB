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

Route::get('MaGiamGia', [UserController::class, 'MaGiamGia'])->name('user.MaGiamGia');

Route::get('ranking', [UserController::class, 'ranking'])->name('user.ranking');
Route::get('/', function () {
    return view('welcome');
});
