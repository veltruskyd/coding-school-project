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

        $filter = $_GET['filter'] ?? "VYCHOZI BOD";
        var_dump($filter);
        
        return View::render('home', [
            'tracks' => $this->track->best(), "title"=>"Nejlepší trasy"

        ]
        
        );

        $url = parse_url($_SERVER['REQUEST_URI'])['path'];

        if($url == '/coding-school-project/new') {
            return View::render('home', ['tracks'=> (new Track)->new(),"title"=>"Nejnovější trasy"]);
        }elseif ($url == '/coding-school-project/best') {
            return View::render('home', ['tracks'=> (new Track)->best(),"title"=>"Nejlepší trasy"]);
        }elseif ($url == '/coding-school-project/') {
            return View::render('home', ['tracks'=> (new Track)->all(),"title"=>"Všechny trasy"]);
        }elseif ($url == '/coding-school-project/my') {
            return View::render('home', ['tracks'=> (new Track)->my(),"title"=>"Moje trasy"]);
        }
    }

    public function create()
    {
        $this->track->create($_POST);
        header('location: /coding-school-project/');
    }
} 
?>