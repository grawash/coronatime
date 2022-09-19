<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('landing');
})->middleware('auth');

Route::get('register', [RegisterController::class, 'index'])->middleware('guest')->name('register.index');

Route::post('register/create', [RegisterController::class, 'store'])->middleware('guest')->name('user.store');

Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('login.index');

Route::post('login', [LoginController::class, 'login'])->middleware('guest')->name('login');

Route::post('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');
