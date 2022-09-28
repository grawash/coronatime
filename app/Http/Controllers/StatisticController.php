<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Contracts\View\View;

class StatisticController extends Controller
{
	public function index(): View
	{
		return view('landing', [
			'confirmed' => Statistic::sum('confirmed'),
			'recovered'   => Statistic::sum('recovered'),
			'deaths'      => Statistic::sum('death'),
		]);
	}

	public function stats(): View
	{
		return view('countries', [
			'countries' => Statistic::all(),
		]);
	}
}
