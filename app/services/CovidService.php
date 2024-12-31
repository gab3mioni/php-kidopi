<?php

namespace App\Services;

use App\Helpers\HttpHelper;
use App\Models\ApiCallModel;

class CovidService
{
    private string $baseUrl;
    private ApiCallModel $apiCallModel;

    public function __construct()
    {
        $this->baseUrl = 'https://dev.kidopilabs.com.br/exercicio/covid.php';
        $this->apiCallModel = new ApiCallModel();
    }

    public function getCovidDataByCountry(string $country): array
    {
        $url = $this->baseUrl . '?pais=' . urlencode($country);
        return HttpHelper::get($url);
    }

    public function checkApiCall(string $country): void
    {
        $this->apiCallModel->logApiCall($country);
    }

    public function getLastApiCall(): ?array
    {
        return $this->apiCallModel->getLastApiCall();
    }
}
