<?php

namespace Tests\Feature;

use Tests\TestCase;

class CommandTest extends TestCase
{
	/*
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_FetchApi_command_should_retrieve_data()
	{
		$response = $this->artisan('fetch:api');
		$response->assertExitCode(0);
	}
}
