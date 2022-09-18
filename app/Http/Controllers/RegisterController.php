<?php

namespace App\Http\Controllers;

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

	public function store(StoreUserRequest $request): RedirectResponse
	{
		$attributtes = $request->validated();
		$attributtes['password'] = bcrypt($attributtes['password']);
		User::create($attributtes);
		return redirect('register');
	}
}
