<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class RegisterController extends Controller
{
	public function index(): View
	{
		return view('register');
	}
}
