<?php

namespace app\controllers;

use Core\View;
use Core\router;
use app\Models\Track;




class FileController
{
    
    public $track;
    
    

    public function update() {
        var_dump($_FILES('addRouteImg'));
        die();

        $like = (new Track)->card_id($_GET['id']);
        $likeValue = $like[0]["Like"];
        $add = intval($_POST['getlike']) + intval($likeValue);
        $this->track->likeCounter($_GET['id'], $add);
        
        header("Location: {$_SERVER['REQUEST_URI']}");

    }

}