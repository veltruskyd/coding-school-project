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
            return View::render('card_detail', ['tracks'=> (new Track)->card(),]);
        }
    

}