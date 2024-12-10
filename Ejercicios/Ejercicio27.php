<?php

$numeros = array(1, 2, 3, 5, 3, 8, 2, 5, 5, 2, 3);

// Crear un array para contar cuántas veces se repite cada número
$contador = array();

foreach ($numeros as $numero) {
    if (array_key_exists($numero, $contador)) {
        $contador[$numero]++;
    } else {
        $contador[$numero] = 1;
    }
}

// Encontrar el máximo número de repeticiones
$max_repeticiones = max($contador);

// Mostrar los números que se repiten el mayor número de veces
echo "El/los número(s) que más se repiten son:\n";
foreach ($contador as $numero => $repeticiones) {
    if ($repeticiones == $max_repeticiones) {
        echo $numero . " con " . $repeticiones . " repeticiones.\n";
    }
}

?>
