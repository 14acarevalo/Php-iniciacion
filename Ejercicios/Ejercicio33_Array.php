<?php
//Crear un array asociativo simple con nombre, edad y ciudad

$nombres = [
    "Alberto" => 29,
    "Pepe" => 30,
    "Juan" => 22,
    "Isabel" => 24,
    "Pepi" => 42,
    "Maria Luz" => 17,

];

if (array_key_exists("Alberto", $nombres)){
    echo "La edad de Alberto, es de: " .$nombres["Alberto"]. " años";
} else {
    echo "Lo sentimos, el nombre de Pablo no está en el listado";
}

?>