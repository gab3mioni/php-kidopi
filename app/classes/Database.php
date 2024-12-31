<?php

namespace App\Classes;

use PDO;
use PDOException;

class Database
{
    private static ?PDO $pdo = null;

    public static function getInstance(): PDO
    {
        if (self::$pdo === null) {
            $host = $_ENV['DB_HOST'];
            $dbname = $_ENV['DB_DATABASE'];
            $user = $_ENV['DB_USERNAME'];
            $password = $_ENV['DB_PASSWORD'];

            try {
                self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Conexão falha: ' . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}