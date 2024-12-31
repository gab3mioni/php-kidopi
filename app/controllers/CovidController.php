<?php

namespace App\Controllers;

use App\Services\CovidService;
use App\Models\CovidModel;
use Core\Controller;

class CovidController extends Controller
{
    private CovidService $covidService;

    public function __construct()
    {
        $this->covidService = new CovidService();
    }

    protected function fetchCovidData(string $country): array
    {
        $apiData = $this->covidService->getCovidDataByCountry($country);
        $covidModel = new CovidModel($apiData);

        return [
            'statesData' => $covidModel->getStatesData(),
            'totalCases' => $covidModel->getTotalCases(),
            'totalDeaths' => $covidModel->getTotalDeaths()
        ];
    }

    protected function logApiCall(string $country): void
    {
        $this->covidService->checkApiCall($country);
    }

    protected function renderCovidView(string $country, array $data): void
    {
        $this->view($country, $data);
    }
}
