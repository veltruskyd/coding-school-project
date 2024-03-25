<?php

namespace app\Models;

class Track extends BaseModel
{
    protected $data = 
    [
        [
            "id" => 1,
            "From" => "Kladno",
            "To" => "Lány",
            "Mapy_link" => "www.mapy.cz",
            "Owner_id" => 1,
            "Img" => "./thumbnail/kladno_lany.jpg",
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
    ];

}