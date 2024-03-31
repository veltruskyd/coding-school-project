<?php

namespace Core;

use Core\view;
use app\controllers\HomeController;




class Router
{

    public $routes = [];




    public function addRoute($route, $controller, $callback, $http_method)
    {
        $this->routes[$http_method.$route] =
        [
            'controller' => $controller,
            'callback' => $callback,
            
        ];

    }


    public static function post()
    {

    }

    public static function get()
    {

    }

    public function run()
    {
        //zjištění požadované URL
        $url = $_SERVER['REQUEST_METHOD'] . $_SERVER['REQUEST_URI'];
        $url = parse_url($url)['path'];

        //volání správného kontroleru
        if (array_key_exists($url, $this->routes))
        {
            $controller = $this->routes[$url]['controller'];
            $callback = $this->routes[$url]['callback'];
    
            $controller = new $controller();
            $controller->$callback();


        }else{

            view::render('404');

        }

    }
}