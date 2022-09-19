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

Route::controller(RegisterController::class)->group(function () {
	Route::get('register', 'index')->middleware('guest')->name('register.index');
	Route::post('register/create', 'store')->middleware('guest')->name('user.store');
});

Route::controller(LoginController::class)->group(function () {
	Route::get('login', 'index')->middleware('guest')->name('login.index');
	Route::post('login', 'login')->middleware('guest')->name('login');
	Route::post('logout', 'logout')->middleware('auth')->name('logout');
});
