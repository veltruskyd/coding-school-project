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


//na card_detail zobrazí kartu dle daného $_GET
    public function show() {
            return View::render('card_detail', ['tracks'=> (new Track)->card_id($_GET['id'])]);
        }
    
//zapisuje +/- liky
    public function update() {
        //načte data o dané track dle její id z $_GET
        $like = (new Track)->card_id($_GET['id']);
        //uloží aktuální hodnotu počtu like dané track
        $likeValue = $like[0]["Like"];
        //sečte a zapíše novou hodnotu like
        $add = intval($_POST['getlike']) + intval($likeValue);
        $this->track->likeCounter($_GET['id'], $add);
        
        header("Location: {$_SERVER['REQUEST_URI']}");

    }

}