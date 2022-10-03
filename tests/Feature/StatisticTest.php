<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class StatisticTest extends TestCase
{
	private User $user;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_landing_should_redirect_to_login_if_not_authorized()
	{
		$response = $this->get(route('landing.stats'));

		$response->assertRedirect(route('login'));
	}

	public function test_visit_landing_page_successfully()
	{
		$resoponse = $this->actingAs($this->user)->get(route('landing.stats'));
		$resoponse->assertSuccessful();
	}

	public function test_visit_statistics_page_successfully()
	{
		$resoponse = $this->actingAs($this->user)->get(route('countries.stats'));
		$resoponse->assertSuccessful();
	}

	// public function test_statistics_page_should_return_corresponding_data_when_searching()
	// {
	// 	$resoponse = $this->actingAs($this->user)->get(route('countries.stats'), [
	// 		'search' => 'georgia',
	// 	]);
	// 	$resoponse->assertSee('Georgia');
	// 	$resoponse->assertSuccessful();
	// }
}
