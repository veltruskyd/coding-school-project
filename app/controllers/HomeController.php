<?php
use Core\View;

class HomeController
{
    public function show()
    {
        View::render('home');
    }

}