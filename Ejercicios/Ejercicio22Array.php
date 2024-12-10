<?php
    echo "En este ejercicio, vamos a buscar si existe un color en un array determinado: " ."\n";
    $colores = array("rojo", "verde", "azul", "amarillo");

    $color_a_buscar = "azul";
    $contador = 0;

    foreach ($colores as $color) {
        if ($color == $color_a_buscar) {
            $contador++;
        }
    }
    echo "El color " .$color_a_buscar. " aparece ".$contador. " vez" ."\n";
    
    if($contador) {
        echo "El color " .$color_a_buscar. " existe en el array" ."\n";
    } else {
        echo "El color " .$color_a_buscar. " NO existe en el array" ."\n";
    }


?>
