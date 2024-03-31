<?php

namespace app\controllers;

use Core\View;
use app\Models\Track;

class HomeController
{
    public $track;



    /*public function __contruct()
    {
        $this->track = new Track();
    }
*/


    public function show()
    {
       return View::render('home', [
            'tracks'=> (new Track)->all(), 
            ]);

    }



    public function create()
    {
        $track = (new Track)->create($_POST);
    }
} 
?>