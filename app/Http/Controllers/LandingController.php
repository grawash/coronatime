<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class LandingController extends Controller
{
    public function stats():View
    {
        $response = Http::get('https://devtest.ge/countries')->json();
        return view('countries', [
				'countries' => $response
			]);
    }
}
