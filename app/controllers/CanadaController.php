<?php

namespace App\Controllers;

class CanadaController extends CovidController
{
    public function index(): void   
    {
        $country = 'canada';

        $covidData = $this->fetchCovidData($country);

        $this->logApiCall($country);

        $this->renderCovidView($country, $covidData);
    }
}

