<?php 

use Core\router;
use App\Controllers\CardController;
use App\Controllers\HomeController;
use app\controllers\TestController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;

$router = new router();

$router->addRoute('/coding-school-project/', HomeController::class, 'show', 'GET');
$router->addRoute('/coding-school-project/', HomeController::class, 'create', 'POST');
$router->addRoute('/coding-school-project/HOME', HomeController::class, 'show', 'GET');
$router->addRoute('/coding-school-project/HOME', HomeController::class, 'create', 'POST');
$router->addRoute('/coding-school-project/best', HomeController::class, 'show', 'GET');
$router->addRoute('/coding-school-project/new', HomeController::class, 'show', 'GET');

$router->addRoute('/coding-school-project/login', LoginController::class, 'show', 'GET');
$router->addRoute('/coding-school-project/login', LoginController::class, 'create', 'POST');
$router->addRoute('/coding-school-project/logout', LoginController::class, 'logout', 'GET');


$router->addRoute('/coding-school-project/register', RegisterController::class, 'show', 'GET');
$router->addRoute('/coding-school-project/register', RegisterController::class, 'create', 'POST');

$router->addRoute('/coding-school-project/card', CardController::class, 'show', 'GET');
$router->addRoute('/coding-school-project/card', CardController::class, 'update', 'POST');

$router->addRoute('/coding-school-project/test', TestController::class, 'show', 'GET');
$router->addRoute('/coding-school-project/test', TestController::class, 'send', 'POST');





$router->run();