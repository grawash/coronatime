<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
	public function index(): View
	{
		return view('login');
	}

	public function login(): RedirectResponse
	{
		$attributes = request()->validate([
			'username'       => 'required',
			'password'       => 'required',
		]);

		if (Auth::attempt(['username' => $attributes['username'], 'password' => $attributes['password']]))
		{
			session()->regenerate();
			return redirect('/');
		}
		elseif (Auth::attempt(['email'=> $attributes['username'], 'password' => $attributes['password']]))
		{
			session()->regenerate();
			return redirect('/');
		}

		throw ValidationException::withMessages([
			'email' => 'Your provided credentials could not be verified.',
		]);
	}
}
