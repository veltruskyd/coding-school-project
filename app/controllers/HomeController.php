<?php

namespace app\controllers;


use Core\File;
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
        $name = strval(date("Y-m-d-H-i-s"));
        File::upload("./thumbnail/","addRouteImg", $name);

        $this->track->create($_POST, strval(File::$final_name));
        
       
        header('location: /coding-school-project/');
    }


 



} 
?>