<?php

namespace Tests\Feature;

use App\Models\User;
use App\Notifications\ResetPassword;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Password;
use Tests\TestCase;

class ResetPasswordTest extends TestCase
{
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_reset_page_displaying_successfully()
	{
		$response = $this->get(route('password.request'));

		$response->assertStatus(200);
	}

	public function test_reset_link_sent_successfully()
	{
		Notification::fake();
		$user = User::factory()->create();
		$this->post(route('password.email'), [
			'email'                 => $user->email,
			'token'                 => $user->remember_token,
			'password'              => $user->password,
			'password_confirmation' => $user->password,
		]);
		Notification::assertSentTo(
			$user,
			ResetPassword::class,
			function ($notification) use ($user) {
				$mailData = $notification->toMail($user)->toArray();
				$this->assertContains('The introduction to the notification.', $mailData['introLines']);
				// ...
				return true;
			}
		);
	}

	public function test_reset_link_displays_password_reset_page()
	{
		$user = User::factory()->create();
		$response = $this->get('reset-password' . '/' . $user->remember_token, [
			'email'                 => $user->email,
			'token'                 => $user->remember_token,
			'password'              => $user->password,
			'password_confirmation' => $user->password,
		]);
		$response->assertStatus(200);
	}

	public function test_user_is_able_to_change_password()
	{
		$fake = Event::fake();
		DB::setEventDispatcher($fake);
		$user = User::factory()->create();

		$token = Password::broker()->createToken($user);
		$response = $this->post(route('password.update'), [
			'email'                 => $user->email,
			'token'                 => $token,
			'password'              => $user->password,
			'password_confirmation' => $user->password,
		]);
		Event::assertDispatched(PasswordReset::class);
	}
}
