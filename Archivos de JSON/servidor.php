

<?php

//Leemos el JSON
$alumnos = file_get_contents("http://192.168.15.49/Johana/myfile.json");
$json_alumnos = json_decode($alumnos,true);

//print_r($json_alumnos);

foreach ($json_alumnos as $alumno) {
   
    echo $alumno['id']."<br>";
    echo $alumno['nombre']."<br>";
    echo $alumno['apellido']."<br>";
    echo $alumno['edad']."<br>";

}


?>