<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

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
		//$countries = DB::table('statistics')->get();
		$countries = Statistic::all();
		if (request('search'))
		{
			$countries = Statistic::whereRaw('LOWER(country->"$.en") like ?', '%' . strtolower(request('search')) . '%')->get();
		}
		return view('countries', [
			'countries' => $countries,
		]);
	}
}
