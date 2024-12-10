<?php
echo "Continuamos con los ejercicios de arrays, ejercicio 2:"."\n";
echo "Vamos a realizar la media de un array:"."\n";

$numeros = array(1,2,3,4,5,6,7);
$suma = 0;
foreach($numeros as $numero) {
    $suma = $suma + $numero;
}
$media = $suma/count($numeros);

echo "La media del array de los números, es igual a: ".$media;

?>