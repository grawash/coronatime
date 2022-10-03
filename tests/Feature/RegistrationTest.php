<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_visit_register_page_successfully()
	{
		$response = $this->get(route('register.index'));

		$response->assertSuccessful();
	}

	public function test_register_should_redirect_to_verify_if_successfully()
	{
		$user = array_merge(
			User::factory()->make()->toArray(),
			[
				'email_verified_at'     => null,
				'password'              => 'secret',
				'password_confirmation' => 'secret',
			]
		);
		$response = $this->post(route('user.register'), $user);

		$response->assertRedirect(route('verification.notice'));
	}

	public function test_register_should_give_password_error_if_repeat_password_does_not_match()
	{
		$user = array_merge(
			User::factory()->make()->toArray(),
			[
				'email_verified_at'     => null,
				'password'              => 'secret',
				'password_confirmation' => 'secretz',
			]
		);
		$response = $this->post(route('user.register'), $user);

		$response->assertSessionHasErrors([
			'password' => 'The password confirmation does not match.',
		]);
	}
}
