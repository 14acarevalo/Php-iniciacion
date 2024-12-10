<?php
//Vamos a realizar una tabla de multiplicar, que en este caso nos obliga a usar el bucle for
echo "En este ejercicio, vamos a realizar la tabla de mulitplicar de un número en especial" ."\n";
$num_especial = 2;
echo "Tabla de multiplicar del número " .$num_especial. "\n";
for ($i = 0; $i <= 10; $i++) {
    echo "El número " .$i. " multiplicado por " .$num_especial. " es igual a: " .$i*$num_especial. "\n";
}
?>