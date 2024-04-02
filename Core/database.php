<?php

namespace Core;

use mysqli;

class database 
{
    protected $connection;


    public function __construct() {
        $servername = "localhost";
        $user = "root";
        $password = "";
        $dbname = "cyklopoho";

        $connection = new mysqli($servername,$user, $password, $dbname);




        if ($connection->connect_error) {
            die("Chyba spojení s databází" . $connection->connect_error);

        }

        $this->connection = $connection;

        
    }

    public function dotaz(string $sql){
        $result = $this->connection->query($sql);

        //pokud promena sql obsahuje slovo SELECT tak se pustí fetch jinak ne

        if(strpos($sql, "SELECT") !== false){
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        
    }
        
}


?>