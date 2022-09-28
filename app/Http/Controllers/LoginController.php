<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginPostRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
	public function index(): View
	{
		return view('login');
	}

	public function login(LoginPostRequest $request): RedirectResponse
	{
		$fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		$request->merge([$fieldType => $request->username]);
		if (auth()->attempt([$fieldType => $request->$fieldType, 'password' => $request->password]))
		{
			session()->regenerate();
			return redirect()->route('landing.stats');
		}
		throw ValidationException::withMessages([
			'username' => 'Your provided credentials could not be verified.',
		]);
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect('login');
	}
}
