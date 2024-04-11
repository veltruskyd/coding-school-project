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



    public function my(int $user_id) {
        
        return $this->database->dotaz("SELECT * FROM tracks where `user_id` = '$user_id' ");
    }



    public function card() {
        
        return $this->database->dotaz('SELECT * FROM tracks ORDER BY `From` DESC');
    }




    public function card_id(int $id) {
        
        return $this->database->dotaz("SELECT * FROM tracks WHERE `id` = '$id' ");
    }



    public function create(array $data = []) {
        $this->database->dotaz ("INSERT INTO tracks (user_id,`From`,`To`, Mapy_link,img) 
        VALUES (1," . "'" .$data['addRouteStart']. "'" . ", " . "'" .$data['addRouteEnd']. "'" . "," . "'" .$data['addRouteMaps']. "'" . ", './thumbnail/default_card.png')");

    }


    public function likeCounter(int $id, int $add)
    {
        $sql = "UPDATE tracks SET `like` = $add WHERE id = $id";

        $this->database->dotaz($sql);
    }

}