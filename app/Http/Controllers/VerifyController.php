<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

class VerifyController extends Controller
{
	public function index(): View
	{
		return view('verify-email');
	}

	public function verify(EmailVerificationRequest $request): RedirectResponse
	{
		dd($request);
		$user = User::find($request->route('id'));

		if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification())))
		{
			throw new AuthorizationException();
		}

		if ($user->markEmailAsVerified())
		{
			event(new Verified($user));
		}

		return redirect($this->redirectPath())->with('verified', true);
	}
}
