<?php

namespace Cart\Validation\Forms;

use Respect\Validation\Validator as v;

class OrderForm
{

	public static function rules()
	{
		return [
			'email' => v::email(),
			'name' => v::alpha(' '),
			'address' => v::alnum(' -'),
			'city' => v::alnum(' '),
			'postal_code' => v::alnum(' '),
		];
	}


}