<?php

namespace App\Console\Commands;

use App\Models\Statistic;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Command;

class FetchApi extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'fetch:api';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'fetch covid data of all countries';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$countries = Http::get('https://devtest.ge/countries')->json();
		foreach ($countries as $country)
		{
			$statistics = Http::post('https://devtest.ge/get-country-statistics', [
				'code' => $country['code'],
			])->json();
			Statistic::create([
				'country'   => json_encode($country['name']),
				'code'      => $statistics['code'],
				'confirmed' => $statistics['confirmed'],
				'recovered' => $statistics['recovered'],
				'death'     => $statistics['deaths'],
			]);
		}
	}
}
