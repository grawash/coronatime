<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Contracts\View\View;

class DisplayStatisticController extends Controller
{
	public function index(): View
	{
		$countries = Statistic::all();
		$confirmed = 0;
		$recovered = 0;
		$deaths = 0;
		$confirmed = $countries->sum('confirmed');
		$recovered = $countries->sum('recovered');
		$deaths = $countries->sum('death');
		return view('landing', [
			'confirmed' => $confirmed,
			'recovered' => $recovered,
			'deaths'    => $deaths,
		]);
	}

	public function stats(): View
	{
		return view('countries', [
			'countries' => Statistic::all(),
		]);
	}
}
