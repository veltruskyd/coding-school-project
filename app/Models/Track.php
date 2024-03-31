<?php

namespace app\Models;

use Core\database;


class Track extends BaseModel
{   
    public function all() {
        $database = new Database();
        $database->connect();
        return $database->sql('SELECT * from tracks');
    }

    /*protected $data = 
    [
        [
            "id" => 1,
            "From" => "Kladno",
            "To" => "Lány",
            "Mapy_link" => "www.mapy.cz",
            "Owner_id" => 1,
            "Img" => "./thumbnail/default_card.png",
            "Like" => 0,
        ],
        [
            "id" => 2,
            "From" => "Kladno",
            "To" => "Letiště Václava Havla",
            "Mapy_link" => "www.mapy.cz",
            "Owner_id" => 1,
            "Img" => "./thumbnail/kladno_lvh.jpg",
            "Like" => 0,
        ],
    ];*/

}