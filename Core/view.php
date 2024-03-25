<?php

namespace Core;

class View
{
    public static function render($view_name, $data = [])
    {
        foreach ($data ?? [] as $variable_name => $value) {
            $variable_name = $variable_name;
            $$variable_name = $value;
        }
        
        
        include "views/$view_name.php";
    }
}