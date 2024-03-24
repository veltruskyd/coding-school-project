<?php

use Core\View;

class LoginController
{
    public function show()
    {
        View::render('login');
    }

}