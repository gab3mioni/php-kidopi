<?php

namespace App\Classes;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $pdo = null;
    private static ?DatabaseInitializer $initializer = null;

    public static function getInstance(): PDO
    {
        if (self::$pdo === null) {
            $host = $_ENV['DB_HOST'];
            $dbname = $_ENV['DB_DATABASE'];
            $user = $_ENV['DB_USERNAME'];
            $password = $_ENV['DB_PASSWORD'];

            $sqlFile = __DIR__ . '/../../database/init_database.sql';

            try {
                self::$pdo = new PDO("mysql:host=$host", $user, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                if (self::$initializer === null) {
                    self::$initializer = new DatabaseInitializer(
                        self::$pdo,
                        new FileDatabaseScriptExecutor(self::$pdo),
                        $sqlFile
                    );
                }

                self::$initializer->initializeDatabase($dbname);

                self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Erro ao conectar ou inicializar o banco de dados: ' . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
