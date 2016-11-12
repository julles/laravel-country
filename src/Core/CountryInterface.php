<?php namespace MuhamadReza\Country\Core;

interface CountryInterface
{
	public function getAll();

	public function getByCode($code);

	public function getByCountryCode($codes = []);

	public function getByCurrency($currency);
	
	public function getByRegion($region);

	public function getByCapital($capital);

	public function getBySubRegion($subRegion);

	public function getByName($name);
}