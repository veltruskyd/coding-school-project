<?php

namespace app\controllers;

use Core\View;
use Core\router;
use app\Models\Track;
class CardController
{
    
    public $track;
    

    
    public function __construct() {
        $this->track = new Track();
    }



    public function show() {
            return View::render('card_detail', ['tracks'=> (new Track)->card_id($_GET['id'])]);
        }
    

    public function update() {
        $like = (new Track)->card_id($_GET['id']);
        $likeValue = $like[0]["Like"];
        $add = intval($_POST['getlike']) + intval($likeValue);
        $this->track->likeCounter($_GET['id'], $add);
        
        header("Location: {$_SERVER['REQUEST_URI']}");

    }

}