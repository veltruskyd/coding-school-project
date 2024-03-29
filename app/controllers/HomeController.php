<?php

namespace app\controllers;

use Core\View;
use app\Models\Track;

class HomeController
{
    public function show()
    {
       return View::render('home', [
            'tracks'=> (new Track)->all(), 
            ]);
    }

    /**public function create()
    {
       //var_dump($_POST[addRoute--start]);
    }*/

} 
?>