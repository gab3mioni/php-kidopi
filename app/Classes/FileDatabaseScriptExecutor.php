<?php

namespace App\Classes;

use PDO;
use PDOException;

class FileDatabaseScriptExecutor implements DatabaseScriptExecutor
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function execute(string $sql): void
    {
        foreach (explode(";", $sql) as $query) {
            if (trim($query)) {
                try {
                    $this->pdo->exec($query);
                } catch (PDOException $e) {
                    die('Erro ao executar SQL: ' . $e->getMessage());
                }
            }
        }
    }
}
