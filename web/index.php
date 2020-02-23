<?php
require_once "../autoload.php";

use src\Router;
use web\controllers\ActionUser;

$router = new Router(__DIR__ . '/config.php');

$name =  $router->getClass();

$bar = new $name;
echo $bar;



