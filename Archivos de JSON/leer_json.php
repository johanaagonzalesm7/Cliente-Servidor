<?php
//Leemos JSON

$alumnos = file_get_contents("data.json");
$json_alumnos = json_decode($alumnos, true);
print_r($json_alumnos)
/* 
foreach($json_alumnos as $alumno) {

	echo $alumno."<br>";

}
*/
?>