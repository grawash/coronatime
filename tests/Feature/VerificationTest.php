<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;
use Illuminate\Support\Facades\Notification;

class VerificationTest extends TestCase
{
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	private User $user;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_verify_should_redirect_to_login_if_user_not_authenticated()
	{
		$response = $this->get(route('verification.notice'));

		$response->assertRedirect(route('login'));
	}

	public function test_verify_should_redirect_to_landing_if_user_already_verified()
	{
		$user = User::factory()->create(['email_verified_at' => now()]);
		$this->be($user);
		$this->get(route('verification.notice'))
		->assertRedirect(route('landing.stats'));
	}

	public function test_verify_should_be_displayed_after_registration()
	{
		$user = User::factory()->create();
		$user->email_verified_at = null;
		$this->be($user);
		$this->get(route('verification.notice'))
			->assertSuccessful(200);
	}

	// public function test_confirmation_email_is_sent_upon_registration()
	// {
	// 	Notification::fake();

	// 	$user = User::factory()->make([
	// 		'username'              => 'tony',
	// 		'email_verified_at'     => null,
	// 		'password'              => 'secret',
	// 		'password_confirmation' => 'secret',
	// 	]);
	// 	//dd($user);
	// 	$response = $this->post(route('user.register'), [
	// 		'username'              => $user->username,
	// 		'email'                 => $user->email,
	// 		'password'              => 'secret',
	// 		'password_confirmation' => 'secret',
	// 	]);
	// 	$response->assertRedirect(route('verification.notice'));
	// 	Notification::assertSentTo($user, VerifyEmail::class);
	// }

	public function test_user_can_verify_his_email_address()
	{
		$user = User::factory()->create(['username' => 'joey', 'email_verified_at' => null]);
		$verificationUrl = URL::temporarySignedRoute(
			'verification.verify',
			now()->addMinutes(60),
			['id' => $user->id, 'hash' => sha1($user->email)]
		);

		$this->assertSame(null, $user->email_verified_at);

		$this->actingAs($user)->get($verificationUrl)->assertRedirect('verified');

		$this->assertTrue(User::find($user->id)->hasVerifiedEmail());
	}

	public function test_verify_should_give_error_if_verify_hash_is_incorrect()
	{
		$user = User::factory()->create(['username' => 'jeezy', 'email_verified_at' => null]);
		$verificationUrl = URL::temporarySignedRoute(
			'verification.verify',
			now()->addMinutes(60),
			['id' => $user->id, 'hash' => sha1($user->email)]
		);

		$this->assertSame(null, $user->email_verified_at);

		//temporary caveman solution
		//hash is random numbers
		$this->actingAs($user)->get('http://localhost/email/verify/' . $user->id . '/44f43f2676345f8556bda91a86c9a6e2dc5a1b1b?expires=1664882476&signature=950b05f7991177eee0a49841b7c6844ade7e2b18ab86ef72a791799c7b8fbcc6')->assertStatus(403);
	}

	public function test_verified_page_should_be_displayed_correctly()
	{
		$response = $this->get(route('verified.notice'))->assertSuccessful();
	}
}
