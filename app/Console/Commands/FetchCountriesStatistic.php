<?php

namespace App\Console\Commands;

use App\Models\Stats;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Command;

class FetchCountriesStatistic extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'fetch:stats';

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
		$response = Http::get('https://devtest.ge/countries')->json();
		$data = [];
		foreach ($response as $country)
		{
			$stats = Http::post('https://devtest.ge/get-country-statistics', [
				'code' => $country['code'],
			])->json();
			Stats::create([
				'country'   => json_encode($country['name']),
				'code'      => $stats['code'],
				'confirmed' => $stats['confirmed'],
				'recovered' => $stats['recovered'],
				'death'     => $stats['deaths'],
			]);
		}
	}
}
