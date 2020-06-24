<?php
require_once "../autoload.php";

use src\Router;
use web\controllers\ActionUser;
use web\controllers\ActionPost;

$router = new Router(__DIR__ . '/config.php');

$name = 'web\controllers\Action' . $router->getClass();

echo (new $name());


