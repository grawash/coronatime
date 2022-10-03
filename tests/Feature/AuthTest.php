<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class AuthTest extends TestCase
{
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_example()
	{
		$response = $this->get('/');

		$response->assertStatus(302);
	}

	public function test_auth_should_display_login()
	{
		$response = $this->get('login');

		$response->assertStatus(200);
	}

	public function test_auth_should_give_errors_if_no_inputs()
	{
		$response = $this->post('login');
		$response->assertSessionHasErrors(
			[
				'username',
				'password',
			]
		);
	}

	public function test_auth_should_give_password_error_if_no_password_provided()
	{
		$response = $this->post('login', [
			'username' => 'justMe',
		]);
		$response->assertSessionHasErrors(
			[
				'password',
			]
		);
		$response->assertSessionDoesntHaveErrors(['username']);
	}

	public function test_auth_should_give_email_error_if_no_email_provided()
	{
		$response = $this->post('login', [
			'password' => 'confusion',
		]);
		$response->assertSessionHasErrors(
			[
				'username',
			]
		);
		$response->assertSessionDoesntHaveErrors(['password']);
	}

	public function test_auth_should_give_incorrect_credentials_error_if_user_not_found()
	{
		$response = $this->post('login', [
			'username' => 'nonexistent',
			'password' => 'passwordnt',
		]);
		$response->assertSessionHasErrors([
			'username' => 'Your provided credentials could not be verified.',
		]);
	}

	public function test_auth_should_redirect_to_landing_if_user_found()
	{
		$username = 'quandale';
		$password = 'dingle';

		$user = User::factory()->create(
			[
				'username' => $username,
				'password' => $password,
			]
		);

		$response = $this->post('login', [
			'username' => $username,
			'password' => $password,
		]);
		$response->assertRedirect(route('landing.stats'));
	}

	public function test_auth_should_redirect_to_login_if_user_logs_out()
	{
		$user = User::factory()->create();
		$this->be($user); // login your user in system

		$this->post(route('logout'))
			->assertRedirect(route('login')); // redirect to login,
		$this->assertGuest(); // check that your user not auth more
	}
}
