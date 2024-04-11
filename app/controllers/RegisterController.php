<?php

namespace app\controllers;

use Core\View;
use app\Models\User;

class RegisterController
{
    public function show()
    {
        View::render('register');
    }


    public function create() {
        (new User)->create($_POST);
       
    header('location: /coding-school-project/');
    }
}

    