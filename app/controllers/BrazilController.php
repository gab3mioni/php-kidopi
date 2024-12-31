<?php
namespace App\Controllers;

use App\Services\CovidService;
use App\Models\CovidModel;
use Core\Controller;

class BrazilController extends Controller
{
    private CovidService $covidService;

    public function __construct()
    {
        $this->covidService = new CovidService();
    }

    public function index(): void
    {
        $apiData = $this->covidService->getCovidDataByCountry('brazil');
        $covidModel = new CovidModel($apiData);

        $statesData = $covidModel->getStatesData();
        $totalCases = $covidModel->getTotalCases();
        $totalDeaths = $covidModel->getTotalDeaths();

        $this->covidService->checkApiCall('brazil');

        $this->view('brazil', [
            'statesData' => $statesData,
            'totalCases' => $totalCases,
            'totalDeaths' => $totalDeaths
        ]);
    }
}
