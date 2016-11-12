<?php namespace MuhamadReza\Country\Provider;

use Illuminate\Support\ServiceProvider;

use MuhamadReza\Country\Core\Country;

class CountryProvider extends ServiceProvider
{
	public function boot()
	{
		
	}

	public function register()
	{
		return $this->app->bind('register-country' , function(){
			return new Country;
		});
	}
}