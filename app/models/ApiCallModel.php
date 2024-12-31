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
}
