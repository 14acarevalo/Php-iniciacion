<?php
echo "Ejercicio 1" ."\n";
echo "Creacion de array asociatio para notas de personas" ."\n";

$notas = array (

    "Juan" => 9.8,
    "Paco" => 6,
    "Andrea" => 7,
    "Pablo" => 8,
);

foreach ($notas as $nombre => $nota) {
    echo "La nota de " .$nombre. " es: " .$nota. "\n";



}

?>