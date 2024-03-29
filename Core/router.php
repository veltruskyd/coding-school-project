<?php

namespace Core;

use Core\view;




class Router
{

    public $routes = [];




    public function addRoute($route, $controller, $callback)
    {
        $this->routes[$route] =
        [
            'controller' => $controller,
            'callback' => $callback,
        ];

    }


    public function run()
    {
        //zjištění požadované URL
        $url = $_SERVER['REQUEST_URI'];
        $url = parse_url($url)['path'];

        //volání správného kontroleru
        if (array_key_exists($url, $this->routes))
        {
            $controller = $this->routes[$url]['controller'];
            $callback = $this->routes[$url]['callback'];
    
            


        }else{

            view::render('404');

        }

    }
}