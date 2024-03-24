<?php 

use Core\Router;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\HomeController;

$router = new Router();

$router->addRoute('/coding-school-project/', HomeController::class, 'show');
$router->addRoute('/coding-school-project/login', LoginController::class, 'show');
$router->addRoute('/coding-school-project/register', RegisterController::class, 'show');





$router->run();