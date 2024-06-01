<?php

namespace app\controllers;


use Core\View;
use Core\router;
use Core\Zapujcka;


class TestController
{
    

    public function show()
    {
        View::render('test');
    }

    public function send() {
        $this->pujcka = new Zapujcka();
        $this->pujcka->daily_rate = 30;
        $this->pujcka->pujcka("login--email", "login--pw");
        
    }
    
}




 

?>