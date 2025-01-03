<?php

namespace App\Classes;

use PDO;

class DatabaseInitializer
{
    private PDO $pdo;
    private DatabaseScriptExecutor $scriptExecutor;
    private string $sqlFile;

    public function __construct(PDO $pdo, DatabaseScriptExecutor $scriptExecutor, string $sqlFile)
    {
        $this->pdo = $pdo;
        $this->scriptExecutor = $scriptExecutor;
        $this->sqlFile = $sqlFile;
    }

    public function initializeDatabase(string $dbname): void
    {
        $stmt = $this->pdo->query("SHOW DATABASES LIKE '$dbname'");
        $databaseExists = $stmt->fetch();

        if (!$databaseExists) {
            if (!file_exists($this->sqlFile)) {
                die("Arquivo SQL não encontrado: {$this->sqlFile}");
            }

            $sql = file_get_contents($this->sqlFile);
            $sql = str_replace('{{DB_NAME}}', $dbname, $sql);

            $this->scriptExecutor->execute($sql);
        }
    }
}
