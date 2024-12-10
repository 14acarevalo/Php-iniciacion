<?php

// Vamos a crear un array de paises y capitales - después añadiremos otro

$paises = [
    "España" => "Madrid",
    "Francia" => "París",
    "Alemania" => "Munich"
];

foreach ($paises as $pais => $capital){
    echo "La capital del país" .$pais. " es: " .$capital ."\n";
}

$paises= array("Italia" => "Roma"); // Añadimos el nuevo pais y la nueva capital 

foreach ($paises as $pais => $capital){
    echo "La capital del país" .$pais. " es: " .$capital ."\n";
}


?>