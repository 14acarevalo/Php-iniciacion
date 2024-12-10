<?php
    $numeros = array(1, 5, 3, 7, 5, 8, 5, 2);

    $numero_a_contar = 5;
    $contador = 0;
    // Contar las veces que aparece el número
    foreach ($numeros as $numero) {
        if ($numero == $numero_a_contar) {
            $contador ++;
        }
    }
    // Imprimir cuántas veces aparece el número
    echo "El número " . $numero_a_contar . " aparece " . $contador . " veces en el array.";
?>
