<?php

namespace app\Models;

use Core\database;


class Track extends BaseModel
{   
    public function all() {
        

        return $this->database->dotaz('SELECT * FROM tracks');
    }

    public function best() {
        

        return $this->database->dotaz('SELECT * FROM tracks ORDER BY `Like` DESC');
    }

    public function new() {
        

        return $this->database->dotaz('SELECT * FROM tracks ORDER BY `id` DESC');
    }

    public function my() {
        

        return $this->database->dotaz('SELECT * FROM tracks where `user_id` = 1');
    }

    public function card() {
        

        return $this->database->dotaz('SELECT * FROM tracks ORDER BY `From` DESC');
    }

    public function create(array $data = [])
    {
        $this->database->dotaz ("INSERT INTO tracks (user_id,`From`,`To`, Mapy_link,img) 
        VALUES (1," . "'" .$data['addRouteStart']. "'" . ", " . "'" .$data['addRouteEnd']. "'" . "," . "'" .$data['addRouteMaps']. "'" . ", './thumbnail/default_card.png')");

    
    }


}