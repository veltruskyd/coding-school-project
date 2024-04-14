<?php

namespace app\controllers;

use Core\Auth;
use Core\View;
use App\Models\User;

class LoginController
{
    public function show()
    {
        View::render('login');
    }

    public function create() {
        

        //pokud zadaný email existuje
        if ((new User)->exists($_POST['login--email'])) {
            

            //najdu uživatele
            $user = (new User)->findByEmail($_POST['login--email']);
            
            
            $password_hash = $user['password'];
            $password = $_POST['login--pw'];

           
            //porovná, zda se hesla shodují
            if (password_verify($password, $password_hash)) {
               
                Auth::login($user['id']);
                
                return header('location: /coding-school-project/');
            }

            header('location: /coding-school-project/login?error="wrong_credetials"');
        }
    }

}