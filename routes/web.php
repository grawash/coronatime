<?php

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
});

Route::get('login', function () {
	return view('login');
});

Route::get('register', [RegisterController::class, 'index'])->name('register.index');

Route::post('register/create', [RegisterController::class, 'store'])->name('user.store');
