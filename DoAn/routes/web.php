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

Route::get('login', [CrudUserController::class, 'login'])->name('login');
<<<<<<< HEAD
Route::post('login', [CrudUserController::class, 'authUser'])->name('auth.user');

Route::get('register', [CrudUserController::class, 'register'])->name('register');
Route::post('register', [CrudUserController::class, 'postRegister'])->name('post.register');

=======
Route::get('account', [CrudUserController::class, 'viewAccountInfo'])->name('account');
>>>>>>> laravel-10x/2.2-account

Route::get('/', function () {
    return view('welcome');
});
