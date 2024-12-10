<?php
echo "Vamos a ordenar nombres: "."\n";
echo "Ejercicio 9:"."\n";

$nombres = array ( "Sandra", "Fernando", "Isabel", "Pablo", "Mowgly", "Elena", "Miguel", "Alejandro", "Daniel", "Yael", "Benjamin", "Agathe", "Alberto"
);
sort($nombres);
echo "Nos encontramos con diferentes nombres desordenados, usaremos sort() para ordenarlos"."\n";
foreach ($nombres as $nombre) {
    for ($i=0; $i<=13; $i++) {
        echo "Nombre " .$i. ": " .$nombre."\n";
    }
}
echo "En total, el array tiene unos " .count($nombres). " nombres";

?>