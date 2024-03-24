<?php

namespace app\controllers;

use Core\View;

class RegisterController
{
    public function show()
    {
        View::render('register');
    }

}