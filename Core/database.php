<?php

namespace Core;

use mysqli;

class database 
{
    protected $connection;


    public function connect () {
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

    public function sql(string $sql){
        $result = $this->connection->query('SELECT * FROM tracks');
        return $result->fetch_all(MYSQLI_ASSOC);
    }
        
}


?>