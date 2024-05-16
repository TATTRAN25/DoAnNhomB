<?php

use App\Http\Controllers\CrudUserController;
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

Route::controller(CrudUserController::class)->group(function() {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authUser')->name('auth.user');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'postRegister')->name('post.register');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/account', 'viewAccountInfo')->name('account');
});

Route::get('/', function () {
    return view('welcome');
});
