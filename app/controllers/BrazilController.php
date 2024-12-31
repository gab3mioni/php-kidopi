<?php

namespace App\Controllers;

class BrazilController extends CovidController
{
    public function index(): void
    {
        $country = 'Brazil';

        $covidData = $this->fetchCovidData($country);

        $this->logApiCall($country);

        $this->renderCovidView($country, $covidData);
    }
}
