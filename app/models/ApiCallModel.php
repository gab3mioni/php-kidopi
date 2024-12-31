<?php

namespace App\Models;

class ApiCallModel extends BaseModel
{
    public function logApiCall(string $country): bool
    {
        $query = "INSERT INTO ApiCalls (country) VALUES (:country)";
        $params = [
            ':country' => $country,
        ];
        return $this->executeQuery($query, $params);
    }

    public function getLastApiCall(): ?array
    {
        $query = "SELECT country, created_at FROM ApiCalls ORDER BY id DESC LIMIT 1";
        return $this->fetchSingleRow($query);
    }
}
