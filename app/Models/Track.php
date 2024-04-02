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

    public function create(array $data = [])
    {
        $this->database->dotaz ("INSERT INTO tracks (user_id,`From`,`To`, Mapy_link,img) 
        VALUES (1," . "'" .$data['addRouteStart']. "'" . ", " . "'" .$data['addRouteEnd']. "'" . "," . "'" .$data['addRouteMaps']. "'" . ", './thumbnail/default_card.png')");

    
    }


}