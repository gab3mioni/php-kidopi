<?php

namespace App\Controllers;

class CanadaController extends CovidController
{
    public function index(): void
    {
        $country = 'Canada';

        $covidData = $this->fetchCovidData($country);

        $this->logApiCall($country);

        $this->renderCovidView($country, $covidData);
    }
}

