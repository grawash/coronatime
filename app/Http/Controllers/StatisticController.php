<?php

namespace App\Http\Controllers;

use App\Http\Requests\SortingRequest;
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

	public function stats(SortingRequest $request): View
	{
		$sort = $request->query('sort', 'asc');
		$sortBy = $request->query('sortBy', 'country->en');
		$countries = request('search') ? $countries = Statistic::whereRaw('LOWER(country->"$.en") like ?', '%' . strtolower(request('search')) . '%')->get() : Statistic::orderBy($sortBy, $sort)->get();
		return view('countries', [
			'countries' => $countries,
		]);
	}
}
