<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class NotVerified
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
	 *
	 * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
	 */
	public function handle(Request $request, Closure $next, $redirectToRoute = null)
	{
		if (($request->user()->hasVerifiedEmail()))
		{
			return $request->expectsJson()
					? abort(403, 'Your email address is already verified.')
					: Redirect::guest(URL::route($redirectToRoute ?: 'landing.stats'));
		}
		return $next($request);
	}
}
