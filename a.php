<?php

$target_dir = "./thumbnail/";
$file_name = $_FILES['addRouteImg']["name"];
$file_tmp = $_FILES['addRouteImg']['tmp_name'];
$file_type = $_FILES['addRouteImg']['type'];

$file = $target_dir . $file_name;


//Převede string na typ souboru. Např. ".jpg"
$slash_position = strpos($file_type, '/');
$type = "." . substr($file_type, $slash_position + 1);

move_uploaded_file($_FILES['addRouteImg']['tmp_name'], $file);

rename($file, "./thumbnail/bábovka" . $type);