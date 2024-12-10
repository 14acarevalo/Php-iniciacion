<?php
echo "En este ejercicio, creamos un array asociativo y vamos a filtrar por diferentes productos según su precio." . "\n";

$productos = array(
    "Television" => array("precio" => 300, "categoria" => "Electrónica"),
    "Laptop" => array("precio" => 500, "categoria" => "Electrónica"),
    "Mesa" => array("precio" => 80, "categoria" => "Muebles"),
    "Silla" => array("precio" => 30, "categoria" => "Muebles")
);

$productos_filtrados = array(); // Creamos un array para almacenar productos filtrados

foreach ($productos as $nombre => $detalles) {
    if ($detalles["precio"] > 50) {
        $productos_filtrados[$nombre] = $detalles; // Agregamos productos que cumplen la condición
    }
}

if (count($productos_filtrados) > 0) {
    echo "Productos con precio mayor a 50:" . "\n";
    foreach ($productos_filtrados as $nombre => $detalles) {
        echo "Producto: " . $nombre . " | Precio: " . $detalles["precio"] . " | Categoría: " . $detalles["categoria"] . "\n";
    }
} else {
    echo "No se ha encontrado ningún producto cuyo precio sea mayor a 50." . "\n";
}

?>


?>