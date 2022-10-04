<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocalizationTest extends TestCase
{
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_localization_should_put_ka_in_session_when_choosing_georgian()
	{
		$response = $this->post(route('locale.change'), [
			'language' => 'ka',
		]);

		$response->assertSessionHas([
			'lang' => 'ka',
		]);
	}

	public function test_localization_should_english_on_default()
	{
		$response = $this->post(route('locale.change'));

		$response->assertSessionHas([
			'lang' => 'en',
		]);
	}
}
