# Laravel 5 Country Packages

[![Total Downloads](https://poser.pugx.org/muhamadrezaar/country/d/total.svg)](https://packagist.org/packages/muhamadrezaar/country)
[![License](https://poser.pugx.org/muhamadrezaar/country/license.svg)](https://packagist.org/packages/muhamadrezaar/country)


Package yang fungsinya untuk mencari data negara diseluruh dunia
seperti nama negara , top level domain , ibu kota  , benua dall

### Installasi

Tambahkan Package pada composer.json
```sh
composer require muhamadrezaar/country:0.0.1
```
setelah package terdownload , register  provider  dan facade nya

Provider :
```sh
MuhamadReza\Country\Provider\CountryProvider::class,
```
Facade :
```sh
'Country'=>MuhamadReza\Country\Facade\CountryFacade::class,
```

### Cara penggunaaan

#### Menampilkan Seluruh data negara

``` sh 
$countries = Country::getAll();

foreach($countries as $country)
{
		// echo $data->name; Menampilkan nama 
		// echo $data->topLevelDomain[0]; Menampilkan domain Notes: array bisa di isi selain 0 , tergantung banyaknya informasi data
		// echo $data->alpha2Code; Menampilkan 2 digit kode 
		// echo $data->alpha3Code; Menampilkan 3 digit kode 
		// echo $data->callingCodes[0]; Menampilkan kode telpon  Notes: array bisa di isi selain 0 , tergantung banyaknya informasi data
		// echo $data->capital; Menampilkan ibu kota 
		// echo $data->altSpellings[0]; Menampilkan ejaan Notes: array bisa di isi selain 0 , tergantung banyaknya informasi data
		// echo $data->region; Menampilkan region atau benua
		// echo $data->subregion; Menampilkan sub region
		// echo $data->translations->ja; menampilkan data nama negara berdasarkan ejaan negara lain tersedia beberapa negara : ->ja,->de,->es,->fr,->it
		// echo $data->population; Menampilkan data populasi
		// echo $data->latlng[0] lattitude
		// echo $data->latlng[1] longitude
		// echo $data->demonym 
		// echo $data->area 
		// echo $data->gini 
		// echo $data->timezones[0] Notes: array bisa di isi selain 0 , tergantung banyaknya informasi data
		// echo $data->nativeName 
		// echo $data->numericCode 
		// echo $data->currencies[0] Notes: array bisa di isi selain 0 , tergantung banyaknya informasi data
		// echo $data->languages[0] Notes: array bisa di isi selain 0 , tergantung banyaknya informasi data
}

```

#### Filter by Code

``` sh

Country::getByCode($code); // 1 or 2 or 3 or Ect

```

#### Filter by Country Code

``` sh

Country::getByCountryCode($code); // id or ru or de or Ect

```

#### Filter by Currency

``` sh

Country::getByCurrency($currency); // idr or aud or usd or Ect

```

#### Filter by Region

``` sh

Country::getByRegion($region); // asia or europe or africa or Ect

```

#### Filter by Capital (Ibu Kota)

``` sh

Country::getByCapital($capital); // jakarta or mexico city  or Ect

```

#### Filter by Name (Like)

``` sh

Country::getByName($name); // indo or america  or Ect
```

## Ada Pertanyaan ?

email aja ke : reza.wikrama3@gmail.com

## License

https://reza.mit-license.org/

**ENJOY !!!**