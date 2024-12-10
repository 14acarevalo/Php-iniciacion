<?php
echo "Vamos a crear un array multidimensional"."\n";
echo "Ejercicio 7:"."\n";

$datos = array (
    array("Nombre" => "Juan", "Edad" =>20, "Profesion" => "Estudiante"),
    array("Nombre" => "Alberto", "Edad" =>30, "Profesion" => "Programador"),
    array("Nombre" => "Rosi", "Edad" =>60, "Profesion" => "Ama de casa"),
);

echo "Nos encontramos con datos de diferentes personas, nombre, edad y profesion:"."\n";
foreach ($datos as $dato) {
    echo "Nombre: " .$dato["Nombre"]. " - Edad: " .$dato["Edad"]. " - Profesion: " .$dato["Profesion"]. "\n";
}


?>