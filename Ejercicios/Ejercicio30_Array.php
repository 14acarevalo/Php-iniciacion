<?php
//Crear un array asociativo simple con nombre, edad y ciudad - modificar el parametro ciudad

$datos = [
    "Nombre" => "Alberto",
    "Edad" => 30,
    "Ciudad" => "Cuenca"
];

echo $datos["Ciudad"] = "Toledo"; // Con esta simple combinación hemos cambiado el parametro ciudad

echo "Nombre: " .$datos ["Nombre"] ."\n";
echo "Edad: " .$datos ["Edad"] ."\n";
echo "Ciudad: " .$datos ["Ciudad"] ."\n";

?>