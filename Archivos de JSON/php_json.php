<?php
//data strored in array
$array =Array (
    "0" => Array (
        "id"  => "01",
        "nombre" =>"johana",
        "apellido" => "macias",
        "edad" => "19",
    ),
     "1" => Array (
        "id"  => "02",
        "nombre" => "pedro",
        "apellido" => "calzada",
        "edad" => "34",
    ),
     "2" => Array (
        "id"  => "03",
        "nombre" => "reyna",
        "apellido" => "campos",
        "edad" => "20"
    )
);
// encode array to json
$json = json_encode($array);
$bytes = file_put_contents("myfile.json",$json);
echo "the number of bytes written are $bytes,";
?>