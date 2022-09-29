<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Contracts\View\View;

class StatisticController extends Controller
{
	public function index(): View
	{
		return view('landing', [
			'confirmed'   => Statistic::sum('confirmed'),
			'recovered'   => Statistic::sum('recovered'),
			'deaths'      => Statistic::sum('death'),
		]);
	}

	public function stats(): View
	{
		$sort = request('sort', 'asc');
		$sortBy = request('sortBy', 'confirmed');
		$countries = Statistic::orderBy($sortBy, $sort)->get();
		if (request('search'))
		{
			$countries = Statistic::whereRaw('LOWER(country->"$.en") like ?', '%' . strtolower(request('search')) . '%')->get();
		}
		return view('countries', [
			'countries' => $countries,
		]);
	}
}
