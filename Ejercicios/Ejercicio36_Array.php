<?php

$paises = [
    "España" => 12345,
    "Francia" => 56789,
    "Alemania" => 121212,
    "Italia" => 456,
    "Portugal" => 100000,
    "Inglaterra" => 5

];

asort($paises); //Con esta funcion, ordenamos los paises por numero de habitantes, de menos a más


foreach ($paises as $pais => $capital){
    echo "La capital del país " .$pais. " tiene una población de: " .$capital ." habitantes " ."\n";
}

?>

