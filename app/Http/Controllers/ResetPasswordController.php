<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostResetRequest;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Contracts\View\View;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
	public function index(): View
	{
		return view('forgot-password');
	}

	public function email(PostResetRequest $request): RedirectResponse
	{
		$status = Password::sendResetLink(
			$request->only('email')
		);

		return $status === Password::RESET_LINK_SENT
					? back()->with(['status' => __($status)])
					: back()->withErrors(['email' => __($status)]);
	}

	public function reset($token, Request $request): View
	{
		return view('reset-password', ['token' => $token, 'email' => $request->email]);
	}

	public function update(ResetPasswordRequest $request): RedirectResponse
	{
		$status = Password::reset(
			$request->only('email', 'password', 'password_confirmation', 'token'),
			function ($user, $password) {
				$user->forceFill([
					'password' => $password,
				])->setRememberToken(Str::random(60));

				$user->save();

				event(new PasswordReset($user));
			}
		);

		return $status === Password::PASSWORD_RESET
					? redirect()->route('reset.login')->with('status', __($status))
					: back()->withErrors(['email' => [__($status)]]);
	}
}
