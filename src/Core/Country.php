<?php namespace MuhamadReza\Country\Core;

use MuhamadReza\Country\Core\Core;
use MuhamadReza\Country\Core\CountryInterface;

class Country extends Core implements CountryInterface
{
	/**
	 * Mendapatkan semua negara
	 * @return [array]
	 */
	public function getAll()
	{
		return $this->execAll();
	}

	/**
	 * Mendapatkan data berdasarkan kode
	 * Example : var_dump($this->getByCode(7));
	 * @param  [integer] $code
	 * @return [array] 
	 */
	public function getByCode($code)
	{
		return $this->execByCode($code);
	}

	/**
	 * Mendapatkan data berdasarkan kode negara
	 * Example : var_dump($this->getByCountryCode(['id','jpn']));
	 * @param  [array] $code
	 * @return [array] 
	 */
	public function getByCountryCode($codes = [])
	{
		return $this->execByCountryCode($codes);
	}

	/**
	 * Mendapatkan data berdasarkan mata uang
	 * Example : var_dump($this->getByCurrency('idr'));
	 * @param  [string] $code
	 * @return [array] 
	 */
	public function getByCurrency($currency)
	{
		return $this->execByCurrency($currency);
	}

	/**
	 * Mendapatkan data berdasarkan region
	 * Example : var_dump($this->getByRegion('asia'));
	 * @param  [string] $code
	 * @return [array] 
	 */
	public function getByRegion($region)
	{
		return $this->execByRegion($region);
	}

	/**
	 * Mendapatkan data berdasarkan capital (Ibu Kota)
	 * Example : var_dump($this->getByRegion('jakarta'));
	 * @param  [string] $code
	 * @return [array] 
	 */
	public function getByCapital($capital)
	{
		return $this->execByCapital($capital);
	}

	/**
	 * Mendapatkan data berdasarkan sub region
	 * Example : var_dump($this->getBySubRegion('western asia'));
	 * @param  [string] $code
	 * @return [array] 
	 */
	public function getBySubRegion($subregion)
	{
		return $this->execBySubRegion($subregion);
	}

	/**
	 * Mendapatkan data berdasarkan nama negara
	 * Example : var_dump($this->getByName('indo'));
	 * @param  [string] $code
	 * @return [array] 
	 */
	public function getByName($name)
	{
		return $this->execByName($name);
	}
}