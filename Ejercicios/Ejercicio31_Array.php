<?php
//Crear un array asociativo simple con nombre, edad y ciudad

$frutas = [
    "Platano" => 5,
    "Melón" => 4,
    "Sandia" => 3
];

foreach ($frutas as $fruta=>$precio) {   
     echo "El precio de la fruta " .$fruta. " es de: " .$precio. " €" . "\n";
}


?>