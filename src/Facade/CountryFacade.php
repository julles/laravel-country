<?php namespace MuhamadReza\Country\Facade;

use Illuminate\Support\Facades\Facade;

class CountryFacade extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'register-country';
	}
}