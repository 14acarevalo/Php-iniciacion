<?php
echo "Vamos a contar los pares dentro de un array"."\n";
echo "Ejercicio 8:"."\n";

$numeros = array (1,2,3,4,5,6,7,8,9,10,12,14,16,18);
$contador = 0;

echo "¿Cuántos números pares hay en el array?:"."\n";
foreach ($numeros as $numero) {
    if ($numero % 2 ==0) {
        $contador ++;
    }
}

echo "En total, hay " .$contador. " numeros pares en el array";

?>