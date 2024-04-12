<?php 

namespace Core;

class File {

    public static $final_name;

    public static function upload($target_dir, $file_form, $img_name) {
    $file_name = $_FILES[$file_form]["name"];
    $file_tmp = $_FILES[$file_form]['tmp_name'];
    $file_type = $_FILES[$file_form]['type'];

    $file = $target_dir . $file_name;


    //Převede string na typ souboru. Např. ".jpg"
    $slash_position = strpos($file_type, '/');
    $type = "." . substr($file_type, $slash_position + 1);

    //Přesune soubor z tmp do složky thumbnail
    move_uploaded_file($_FILES['addRouteImg']['tmp_name'], $file);

    //Přejmenuje přesunutý soubor
    $final_name = "./thumbnail/". $img_name . $type;
    rename($file, $final_name);
    self::$final_name = "./thumbnail/". $img_name . $type;
    }
}