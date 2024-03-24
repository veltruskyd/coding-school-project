<?php

namespace app\utils;


class debug
{
    public static function dump($variable)
    {
        echo "<pre>";
        var_dump($variable);
        echo "</pre>";
    }
}