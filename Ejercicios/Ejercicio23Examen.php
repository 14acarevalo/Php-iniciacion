<?php
echo "Vamos a realizar un examen para afianzar conocimientos"."\n";
echo "Ejercicio 1"."\n";
//Crea dos variables, $a y $b, con valores numéricos. Suma ambos valores y almacena el resultado en una variable llamada $suma. 
//Luego multiplica los mismos valores y guarda el resultado en una variable llamada $producto. Muestra ambos resultados por pantalla.

echo "Calculadora"."\n";
$num1 = 4;
$num2 = 5;
$suma = $num1 + $num2;
$multiplicacion = $num1*$num2;
echo "El resultado de sumar " .$num1. " con el número " .$num2. " es igual a: ".$suma ."\n";
echo "El resultado de multiplicar " .$num1. " con el número " .$num2. " es igual a: ".$multiplicacion."\n";
echo "\n";
echo "Ejercicio 2"."\n";
//Crea tres variables: $num1, $num2, y $num3. 
//Escribe un código que determine cuál de los tres números es el mayor y muestra ese número en pantalla.
echo "¿Qué número es el mayor?"."\n";
$num3 = 17;
$num4= 14;
$num5 = 21;
if ($num3 > $num4 and $num3 > $num5) {
    echo "El número ".$num3. " es el mayor";
} else if ($num4 > $num3 and $num4 > $num5) {
    echo "El número ".$num4. " es el mayor";
} else {
    echo "El número ".$num5. " es el mayor";
}
echo "\n";
echo "Ejercicio 3"."\n";
//Recorre números del 1 al 100 
// Lo voy a hacer con for y con while
echo "Bucle for: "."\n";
for ($i = 0; $i<=100; $i++){
    echo "Numero: ".$i."\n";
}
echo "\n";
echo "Fin con el bucle for" ."\n";
echo "\n";
echo "Bucle while: "."\n";
$num6 = 1;
while ($num6<100){
    $num6++;
    echo "Número: " .$num6."\n";
}
echo "\n";
echo "Fin con el bucle while" ."\n";
echo "\n";

echo "Ejercicio 4"."\n";
//Array, crear un array con 5 nombres y recorrerlo
echo "Array de nombres: "."\n";
$nombres = array ("Sandra", "Alberto", "Pablo", "Mowgly", "Nadal");
$contador_orden = 0;
foreach($nombres as $nombre) {
        echo "Nombre: ".$contador_orden. " ". $nombre. "\n";
        $contador_orden++;
}
echo "\n";

echo "Ejercicio 5"."\n";
//Buscar colores en un array
echo "En este ejercicio, vamos a buscar el color dentro de un array"."\n";
$colores = array ("azul", "blanco", "rojo", "amarrillo", "verde");
$color_a_encontrar = "verde";
$contador = 0;
echo "El color " .$color_a_encontrar. " es el color a buscar";

foreach ($colores as $color){
    if($color == $color_a_encontrar){
        $contador++;
    }
}

if ($contador){
    echo "El color " .$color_a_encontrar. " esta presente"."\n";
} else {
    echo "El color " .$color_a_encontrar. " NO esta presente"."\n";

}


echo "Ejercicio 6"."\n";
//Crea un array de números llamado $numeros que contenga al menos 10 números, algunos de ellos repetidos.
//Escribe un código que cuente cuántas veces aparece un número específico (por ejemplo, el número 5) en el array.

$numeros_array = array (1,2,3,4,5,5,5,6,7,8,9);
echo "En este ejercicio, vamos a buscar un número y ver las veces que se repite"."\n";
$numero_a_encontrar = 5;
$contador_de_5 = 0;
foreach ($numeros_array as $numero) {
    if ($numero == $numero_a_encontrar)
    $contador_de_5 ++;
}

if ($contador_de_5){
    echo "El numero " .$numero_a_encontrar. " esta presente y aparece ".$contador_de_5. " veces en el array";
} else {
    echo "El número " .$numero_a_encontrar. " NO esta presente";

}








?>