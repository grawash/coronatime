<?php

namespace App\Http\Controllers;

use App\Http\Requests\VerifyRequest;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class VerificationController extends Controller
{
	public function index(): View
	{
		return view('verify-email');
	}

	public function verified(): View
	{
		return view('verified');
	}

	public function verify(VerifyRequest $request): RedirectResponse
	{
		$user = User::find($request->route('id'));

		if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification())))
		{
			throw new AuthorizationException();
		}

		if ($user->markEmailAsVerified())
		{
			event(new Verified($user));
		}

		return redirect('verified')->with('verified', true);
	}
}
