<?php

namespace app\controllers;

use Core\Auth;
use Core\View;
use app\Models\User;

class RegisterController
{
    public function show()
    {
        View::render('register');
    }


    public function create() {
        if ((new User)->create($_POST)) {

            $user_id = (new User)->findByEmail($_POST['register--email'])['id'];
            Auth::login($user_id);
            header('location: /coding-school-project/');
       }else{
            header('location: /coding-school-project/register?error=email_taken');
       };
       
    
    }
}

    