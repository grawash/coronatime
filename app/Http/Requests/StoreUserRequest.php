<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'username' => 'required',
			'email'    => 'required|email',
			'password' => 'required|confirmed',
		];
	}

	// public function prepareForValidation()
	// {
	// 	$this->merge([
	// 		'password' => bcrypt($this->password),
	// 	]);
	// }
}
