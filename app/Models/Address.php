<?php

namespace Cart\Models;

use Cart\Models\Address;
use Illuminate\Database\Eloquent\Model;

class Address extends Model 
{
	protected $fillable = [
		'address',
		'city',
		'postal_code',
	];


}