<?php

namespace App\Controllers;

class CovidCompareController extends CovidController
{
    public function index(): void
    {
        $data = $this->compare();
        $this->view('covidCompare', $data);
    }

    public function compare(): array
    {
        $country1 = $_POST['country1'] ?? null;
        $country2 = $_POST['country2'] ?? null;

        if ($country1 && $country2) {
            $data1 = $this->fetchCovidData($country1);
            $data2 = $this->fetchCovidData($country2);

            $rate1 = $this->calculateDeathRate($data1['totalDeaths'], $data1['totalCases']);
            $rate2 = $this->calculateDeathRate($data2['totalDeaths'], $data2['totalCases']);

            $difference = $rate1 - $rate2;

            return [
                'country1' => $country1,
                'country2' => $country2,
                'rate1' => $rate1,
                'rate2' => $rate2,
                'difference' => $difference
            ];
        } else {
            return [
                'country1' => 'Desconhecido',
                'country2' => 'Desconhecido',
                'rate1' => null,
                'rate2' => null,
                'difference' => null
            ];
        }
    }

    private function calculateDeathRate(int $deaths, int $cases): float
    {
        return $cases > 0 ? $deaths / $cases : 0.0;
    }
}
