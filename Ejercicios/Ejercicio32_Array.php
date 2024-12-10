<?php

//Crear un array asociativo de productos, buscar un producto determinado y sacar el valor de este

$productos = [
    "Platano" => 5,
    "Melón" => 4,
    "Sandia" => 3,
    "Chocolate" => 1,
    "Pan Bimbo" => 2,
    "Chorizo" => 6
];

    if (array_key_exists("Pan", $productos)){ // Se utiliza la función array_key_exists para ver si existe un producto determinado
        echo "El precio del pan es de: " .$productos["Pan"]. " €";
    } else {
        echo "No existe ese producto dentro de nuestra tienda, lo sentimos";
    }



?>