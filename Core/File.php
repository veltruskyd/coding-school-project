<?php 

namespace Core;

class File {

    public static $final_name;

    /*
    $target_dir = složka, kam se ukládají obrázky
    $file_form = název inputu pro vkládání obrázků
    $img_name = jak se mají jmenovat vkládané obrázky
    $if_blank = odkaz na defaultní obrázek
    */

    public static function upload($target_dir, $file_form, $img_name, $if_blank) {

    //Získání nezbytných dat z $_FILES
    $file_name = $_FILES[$file_form]["name"];
    $file_tmp = $_FILES[$file_form]['tmp_name'];
    $file_type = $_FILES[$file_form]['type'];


    //Převede složený string na typ souboru. Např. ".jpg".
    $slash_position = strpos($file_type, '/');
    $type = "." . substr($file_type, $slash_position + 1);


    //Přesune soubor z tmp do složky $target_dir.
    $file = $target_dir . $file_name;
    move_uploaded_file($_FILES[$file_form]['tmp_name'], $file);


    //Přejmenuje přesunutý soubor.
        $final_name = $target_dir . $img_name . $type;
        rename($file, $final_name);

        
    //Pokud není soubor vložen, odešle do databáze odkaz na defaultní obrázek ($if_blank).
        if($_FILES[$file_form]['size'] == 0) {
            return $final_name = $if_blank;
        }else{
            return $final_name = $target_dir . $img_name . $type;
        }
    }
}