<?php

use app\utils\debug;
use app\Models\Track;



  

$url = parse_url($_SERVER['REQUEST_METHOD'] . $_SERVER['REQUEST_URI'])['path'];

if($url == 'GET/coding-school-project/new') {
            echo('<h3>Nejnovější trasy</h3><section id="best">'); 
        }elseif ($url == 'GET/coding-school-project/best') {
            echo('<h3>Nejlepší trasy</h3><section id="best">');
        }elseif ($url == 'GET/coding-school-project/') {
            echo('<h3>Všechny trasy</h3><section id="best">');
        }elseif ($url == 'GET/coding-school-project/my') {
            echo('<h3>Moje trasy</h3><section id="best">');
        }
        foreach ($tracks as $track) {
            echo('<div class="karta">
            <div class="kartaImg">
            <img class="trackImg" src="'.$track['img'].'" alt="">
            </div>
            <p class="kartaText">' . $track['From']." - ".$track['To'] . '</p>
            </div>');};

        
?>