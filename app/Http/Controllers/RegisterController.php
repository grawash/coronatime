<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
	public function index(): View
	{
		return view('register');
	}

	public function register(StoreUserRequest $request): RedirectResponse
	{
		$user = User::create($request->validated());
		event(new Registered($user));
		auth()->login($user);
		return redirect()->route('verification.notice');
	}
}
