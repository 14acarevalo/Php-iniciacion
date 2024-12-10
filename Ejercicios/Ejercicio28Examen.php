<?php
echo "En este primer apartado, vamos a realizar una calculadora simple, creando una función";

function calculadora($num1, $num2) {
$suma = $num1 + $num2;
$multiplicación = $num1 * $num2;
$resta = $num1 - $num2;
$division = $num1 - $num2;

echo "Tabla de multiplicar del número " .$num1. " \n";
for ($i = 0; $i<=10; $i++){
    echo $i. " x " .$num1. " = " .($i*$num1)."\n";
    echo "\n";
}
echo "\n";
echo "\n";

echo "Tabla de multiplicar del número " .$num2. " \n";
for ($i = 0; $i<=10; $i++){
    echo $i. " x " .$num2. " = " .($i*$num2)."\n";
    echo "\n";
}
echo "\n";
echo "Operaciones calculadora:" . "\n";
echo " Suma: " .$suma. "\n";
echo " Resta: " .$resta. "\n";
echo " Multiplicacion: " .$multiplicación. "\n";
echo " Division: " .$division. "\n";
}

calculadora (5,2)
?>

<?php
echo "En este primer apartado, vamos a buscar el número mayor, here we go!!" . "\n";
$cadena_numeros = array (1,2,3,4,5,6,7,8,9);
$mayor = $cadena_numeros[0];

foreach ($cadena_numeros as $cadena) {
    if ($cadena > $mayor) {
        $mayor = $cadena;
    }
}
echo "El número mayor del array es igual a: " .$mayor;
echo "\n";
echo "\n";

?>

<?php
$productos = array(
    "Television" => 300,
    "Laptop" => 500,
    "Mesa" => 80,
    "Silla" => 30
);

foreach ($productos as $producto => $precio) {
    if ($precio > 50) {
        echo "Producto: " . $producto . ", Precio: " . $precio . "\n";
    }
}
?>
