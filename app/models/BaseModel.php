<?php

namespace App\Models;

use PDO;

class BaseModel
{
    private PDO $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo;
    }

    protected  function executeQuery(string $query, array $params): bool
    {
        $stmt = $this->pdo->prepare($query);
        foreach($params as $key => $value) {
            $stmt->bindValue($key, $value);
        }
        return $stmt->execute();
    }
}