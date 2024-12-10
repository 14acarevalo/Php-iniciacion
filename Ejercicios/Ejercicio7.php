<?php
echo "Calculadora: " ."\n";
$num1 = 2;
$num2 = 8;

$suma = $num1 + $num2;
$resta = $num2 +- $num1;
$multiplicacion = $num1 * $num2;
$divison = $num2 / $num1;

echo "Operaciones matematicas: " ."\n";
echo "Suma: "."$num1". " + " ."$num2" ." = " .$suma."\n";
echo "Resta: "."$num2". " - " ."$num1" ." = " .$resta."\n";
echo "Multiplicacion: "."$num1". " x " ."$num2" ." = " .$multiplicacion."\n";
echo "Division: "."$num2". " / " ."$num1" ." = " .$divison."\n";

echo "Vamos a complicarlo un poco más: " ."\n";
echo "Calculadora 2: " ."\n";
echo "Operaciones matematicas: " ."\n";
echo "Suma: "."$num1". " + " ."$num2" ." = " .$suma."\n";
if($num1 >= $num2 ) {
    echo "Resta: "."$num1". " - " ."$num2" ." = " .$resta."\n";
}else {
    echo "No se puede restar, ya que el número " .$num1. " es menor que el número " .$num2;
}
echo "Multiplicacion: "."$num1". " x " ."$num2" ." = " .$multiplicacion."\n";

if($num1 >= $num2 ) {
    echo "Divison: "."$num1". " / " ."$num2" ." = " .$divison."\n";
}else {
    echo "No se puede dividir, ya que el número " .$num1. " es menor que el número " .$num2;
}
?>