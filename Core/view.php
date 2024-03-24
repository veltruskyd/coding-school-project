<?php

namespace Core;

class View
{
    public static function render($view_name)
    {
        include "views/$view_name.php";
    }
}