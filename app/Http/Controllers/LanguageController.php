<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
	public function change(): RedirectResponse
	{
		$locale = request()->language;
		if (in_array($locale, config('app.available_locales')))
		{
			session()->put('lang', $locale);
		}
		else
		{
			session()->put('lang', 'en');
		}
		return redirect()->back();
	}
}
