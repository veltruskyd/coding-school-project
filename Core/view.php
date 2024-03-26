<?php

namespace Core;

class View
{
    public static function render($view_name, $data = [])
    {
        //Projde vložené pole a vytvoří znich data klíč -> hodnota 
        foreach ($data ?? [] as $variable_name => $value) {
            //$variable_name = $key;
            $$variable_name = $value;
        }
        
        
        include "views/$view_name.php";
    }
}

?>