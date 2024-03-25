<?php

namespace app\controllers;

use Core\View;
use app\Models\Track;

class HomeController
{
    public function show()
    {
        View::render('home', [
            'tracks'=> (new Track)->all(), 
            ]);
    }

}