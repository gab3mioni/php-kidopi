<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use App\Classes\Database;
use Core\Router;
use Core\App;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../.env');

$pdo = Database::getInstance();

$router = new Router();
$app = new App($router);
$app->run();
