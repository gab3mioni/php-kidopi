<?php

require_once '../vendor/autoload.php';
require_once '../config/config.php';

use Core\Router;
use Core\App;

$router = new Router();
$app = new App($router);
$app->run();
