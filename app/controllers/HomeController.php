<?php

namespace app\controllers;

use Core\View;
use Core\router;
use app\Models\Track;

class HomeController
{
    public $track;

    
    public function __construct() {
        $this->track = new Track();
    }



    public function show() {
        $url = parse_url($_SERVER['REQUEST_METHOD'] . $_SERVER['REQUEST_URI'])['path'];

        if($url == 'GET/coding-school-project/new') {
            return View::render('home', ['tracks'=> (new Track)->new(),]);
        }elseif ($url == 'GET/coding-school-project/best') {
            return View::render('home', ['tracks'=> (new Track)->best(),]);
        }elseif ($url == 'GET/coding-school-project/') {
            return View::render('home', ['tracks'=> (new Track)->all(),]);
        }elseif ($url == 'GET/coding-school-project/my') {
            return View::render('home', ['tracks'=> (new Track)->my(),]);
        }
    }

    public function create()
    {
        $this->track->create($_POST);
        header('location: /coding-school-project/');
    }
} 
?>