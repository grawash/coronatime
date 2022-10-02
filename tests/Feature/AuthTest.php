<?php

namespace Tests\Feature;

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
	}

	public function test_auth_should_give_email_error_if_no_email_provided()
	{
	}

	public function test_auth_should_give_password_error_if_incorrect_password_provided()
	{
	}

	public function test_auth_should_give_email_error_if_incorrect_email_provided()
	{
	}

	public function test_auth_should_give_incorrect_credential_error_if_user_not_found()
	{
	}

	public function test_auth_should_redirect_to_landing_if_user_found()
	{
	}
}
