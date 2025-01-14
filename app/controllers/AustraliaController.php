<?php

namespace App\Controllers;

class AustraliaController extends CovidController
{
    public function index(): void
    {
        $country = 'Australia';

        $covidData = $this->fetchCovidData($country);

        $this->logApiCall($country);

        $this->renderCovidView($country, $covidData);
    }
}
