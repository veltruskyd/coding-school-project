<?php 

namespace Core;

class File {

    public static $final_name;

    public static function upload($target_dir, $file_form, $img_name) {

    //Získání nezbytných dat z $_FILES
    $file_name = $_FILES[$file_form]["name"];
    $file_tmp = $_FILES[$file_form]['tmp_name'];
    $file_type = $_FILES[$file_form]['type'];


    //Převede string na typ souboru. Např. ".jpg"
    $slash_position = strpos($file_type, '/');
    $type = "." . substr($file_type, $slash_position + 1);

    //Přesune soubor z tmp do složky thumbnail
    $file = $target_dir . $file_name;
    move_uploaded_file($_FILES['addRouteImg']['tmp_name'], $file);

    //Přejmenuje přesunutý soubor
    
        $final_name = "./thumbnail/". $img_name . $type;
        rename($file, $final_name);

        if($_FILES['addRouteImg']['size'] == 0) {
            self::$final_name = "./thumbnail/default_card.png";
        }else{
            self::$final_name = "./thumbnail/". $img_name . $type;
        }
    }
}