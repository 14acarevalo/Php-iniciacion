<?php
$paises = [
    "España" => "Madrid",
    "Francia" => "París",
    "Alemania" => "Munich",
    "Italia" => "Roma",
    "Portugal" => "Oporto"
];

ksort($paises); //Con esta funcion, ordenamos los países en orden alfabetico


foreach ($paises as $pais => $capital){
    echo "La capital del país " .$pais. " es: " .$capital ."\n";
}

?>