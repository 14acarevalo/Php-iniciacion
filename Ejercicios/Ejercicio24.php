<?php

function calculadora($numero1, $numero2){
    echo "Vamos a realizar una calculadora con diferentes funciones: ";
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    echo "Operaciones matemáticas de esta calculadora: " ."\n";
    echo "Tus numeros son: " .$numero1. " y " .$numero2. " y con ellos se obtiene:" ."\n" ;
    echo "Suma: " .$suma ."\n";
    if($numero1 >= $numero2) {    
        echo "Resta: " .$resta ."\n";
    } else {
        echo "El segundo número es mayor que el primero y no se puede obtener un resultado positivo" ."\n";
    }
    echo "Multiplicacion: " .$multiplicacion ."\n";
    if($numero1 >= $numero2) {    
        echo "Division: " .$division ."\n";
    } else {
        echo "El segundo número es mayor que el primero y no se puede obtener un resultado positivo" ."\n";
    }
}
calculadora (5,7);

?>