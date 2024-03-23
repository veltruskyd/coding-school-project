<?php
require "./app/controllers/HomeController.php";
require "./app/controllers/LoginController.php";
require "./app/controllers/RegisterController.php";



//zjištění požadované URL
$url = $_SERVER['REQUEST_URI'];
$url = parse_url($url)['path'];


//definované adresy
$routes = 
[
    "/coding-school-project/" => [
        'controller'=> HomeController::class,
        'callback'=> 'show'
    ],
    "/coding-school-project/home" => [
        'controller'=> HomeController::class,
        'callback'=> 'show'
    ],
    "/coding-school-project/login" => [
        'controller'=> LoginController::class,
        'callback'=> 'show'
    ],
    "/coding-school-project/register" => [
        'controller' => RegisterController::class,
        'callback' => 'show'
    ],
];

//volání správného kontroleru
if (array_key_exists($url, $routes))
{
    $controller = $routes[$url]['controller'];
    $callback = $routes[$url]['callback'];
    
    $controller = new $controller();
    $controller->$callback();


}else{

    echo "404";
}
?>
