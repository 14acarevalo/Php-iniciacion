<?php
//Practica y comienzo con los arrays

echo "En estos ejercicios, nos vamos a centrar en el trabajo de los diferentes arrays" ."\n";
echo "Llevaré a cabo en este apartado, ejercicio de indexados para sacar en función de la posición del array, el termino en concreto"."\n";

$alimentos = array("Sushi", "Pizza", "Pasta", "Pollo");
echo $alimentos[0];
echo "\n";
echo $alimentos[1];
echo "\n";
echo $alimentos[2];
echo "\n";
echo $alimentos[3];
echo "\n";
echo "Opcion 2:";
echo "\n";

foreach ($alimentos as $alimento) {

    echo $alimento . "\n";
}
?>