<?php

namespace App\Controllers;

use App\Services\CovidService;
use Core\Controller;

class HomeController extends Controller
{
    private CovidService $covidService;

    public function __construct()
    {
        $this->covidService = new CovidService();
    }

    public function index(): void
    {
        $data['lastApiCall'] = $this->covidService->getLastApiCall();
        $data['countries'] = $this->covidService->fetchAvailableCountries();
        $this->view('home', $data);
    }
}
