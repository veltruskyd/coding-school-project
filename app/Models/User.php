<?php

namespace App\Models;

use app\Models\BaseModel;

class User extends BaseModel {
    protected $data = [];

    public function all() {
        return $this->database->sql('SELECT * FROM users');
    }

    public function create($data) {

        $data['login--pw'] = password_hash($data['login--pw'], PASSWORD_DEFAULT);

        //if email exists
        if ($this->exists($data['register--email'])) {

            return false;
            header('location: /coding-school-project/register?error=email_taken');
            die();
        }
        
        $sql = "INSERT INTO users (email, password)
        VALUES (" . "'" .$data['register--email']. "'" . ", " . "'" .$data['login--pw']. "'" . ")";

        $this->database->dotaz($sql);
        return true;
    }


    public function findByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        return $this->database->dotaz($sql)[0];
    }


    public function exists(string $email) {
        $sql = "SELECT email FROM users WHERE email = '$email'";

        if (count($this->database->dotaz($sql)) > 0) {
            return true;
        }else{
            return false;
        };
    }

}