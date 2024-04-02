<?php

namespace app\controllers;

use Core\View;
use app\Models\Track;

class HomeController
{
    public $track;



    
    public function __construct() {
        $this->track = new Track();
    }



    public function show()
    {
       return View::render('home', [
            'tracks'=> (new Track)->all(), 
            ]);

    }



    public function create()
    {
        $this->track->create($_POST);
        header('location: /coding-school-project/');
    }
} 
?>