<?php
//require_once "../autoload.php";
require_once '../vendor/autoload.php';

use app\src\Router;


$router = new Router(__DIR__ . '/config.php');

$name = 'app\web\controllers\Action' . $router->getClass();

echo (new $name());


