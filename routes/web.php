<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\VerificationController;
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
})->middleware('auth', 'verified');

Route::controller(RegisterController::class)->group(function () {
	Route::get('register', 'index')->middleware('guest')->name('register.index');
	Route::post('register', 'register')->middleware('guest')->name('user.register');
});

Route::controller(LoginController::class)->group(function () {
	Route::get('login', 'index')->middleware('guest')->name('login.index');
	Route::post('login', 'login')->middleware('guest')->name('login');
	Route::post('logout', 'logout')->middleware('auth')->name('logout');
});

Route::controller(VerificationController::class)->group(function () {
	Route::get('/email/verify', 'index')->middleware('auth')->name('verification.notice');
	Route::get('/verified', 'verified')->middleware('guest')->name('verified.notice');
	Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify');
});

Route::controller(ResetPasswordController::class)->group(function () {
	Route::get('/forgot-password', 'index')->middleware('guest')->name('password.request');
	Route::post('/forgot-password', 'email')->middleware('guest')->name('password.email');
	Route::get('/reset-password/{token}', 'reset')->middleware('guest')->name('password.reset');
	Route::post('/reset-password', 'update')->middleware('guest')->name('password.update');
});
