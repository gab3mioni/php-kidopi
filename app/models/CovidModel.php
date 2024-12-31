<?php

namespace App\Models;

class CovidModel
{
    private array $apiData;

    public function __construct(array $apiData)
    {
        $this->apiData = $apiData;
    }

    public function getStatesData(): array
    {
        $statesData = [];
        foreach ($this->apiData as $data) {
            $statesData[] = [
                'state' => $data['ProvinciaEstado'],
                'cases' => $data['Confirmados'],
                'deaths' => $data['Mortos'],
            ];
        }
        return $statesData;
    }

    public function getTotalCases(): int
    {
        $totalCases = 0;
        foreach ($this->apiData as $data) {
            $totalCases += $data['Confirmados'];
        }
        return $totalCases;
    }

    public function getTotalDeaths(): int
    {
        $totalDeaths = 0;
        foreach ($this->apiData as $data) {
            $totalDeaths += $data['Mortos'];
        }
        return $totalDeaths;
    }
}
