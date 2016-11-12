<?php namespace MuhamadReza\Country\Core;

class Core
{
	protected $url = "https://restcountries.eu/rest/v1/";

	public function transform($params)
	{
		$contents = @file_get_contents($this->url.$params);
		if($contents === false)
		{
			throw new \Exception("Negara yang anda cari tidak ada :)", 1);
		}else{
			return json_decode($contents);
		}
		
	}

	public function execAll()
	{
		$contents = $this->transform('all');

		return $contents;
	}

	public function execByCode($code)
	{
		$contents = $this->transform('callingcode/'.$code);
		return $contents;
	}

	public function execByCountryCode($codes=[])
	{
		$params = "";
		foreach($codes as $code)
		{
			$params.=$code.";";
		}
		$contents = $this->transform('alpha?codes='.$params);
		return $contents;
	}

	public function execByCurrency($currency)
	{
		$contents = $this->transform('currency/'.$currency);
		return $contents;
	}

	public function execByRegion($region)
	{
		$contents = $this->transform('region/'.$region);
		return $contents;
	}

	public function execByCapital($capital)
	{
		$contents = $this->transform('capital/'.$capital);
		return $contents;
	}

	public function execBySubRegion($subregion)
	{
		$contents = $this->transform('subregion/'.$subregion);
		return $contents;
	}

	public function execByName($name)
	{
		$contents = $this->transform('name/'.$name);
		return $contents;
	}

}