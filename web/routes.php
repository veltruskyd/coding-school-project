<?php 

use Core\Router;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\HomeController;

$router = new Router();

$router->addRoute('/coding-school-project/', HomeController::class, 'show', 'GET');
$router->addRoute('/coding-school-project/', HomeController::class, 'create', 'POST');
$router->addRoute('/coding-school-project/HOME', HomeController::class, 'show', 'GET');

$router->addRoute('/coding-school-project/login', LoginController::class, 'show', 'GET');

$router->addRoute('/coding-school-project/register', RegisterController::class, 'show', 'GET');





$router->run();