<?php

namespace App\Http\Controllers;

use App\Models\Stats;
use Illuminate\Contracts\View\View;

class LandingController extends Controller
{
	public function index(): View
	{
		$countries = Stats::all();
		$confirmed = 0;
		$recovered = 0;
		$deaths = 0;
		foreach ($countries as $country)
		{
			$confirmed += $country->confirmed;
			$recovered += $country->recovered;
			$deaths += $country->death;
		}
		return view('landing', [
			'confirmed' => $confirmed,
			'recovered' => $recovered,
			'deaths'    => $deaths,
		]);
	}

	public function stats(): View
	{
		return view('countries', [
			'countries' => Stats::all(),
		]);
	}
}
