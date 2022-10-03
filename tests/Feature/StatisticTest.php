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

	public function test_visit_landing_successfully()
	{
		$resoponse = $this->actingAs($this->user)->get(route('landing.stats'));
		$resoponse->assertSuccessful();
	}
}
