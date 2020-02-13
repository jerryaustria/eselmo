<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\apps_countries as countries;

class CountriesController extends Controller
{
    //
    public function __construct(countries $countries)
    {
        $this->countries = $countries->all();
    }

    public function activeCountries(countries $countries)
    {
        return $countries->getActiveCountries();
    }

}
