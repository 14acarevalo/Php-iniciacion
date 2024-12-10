<?php

//Primer proyecto, creación de un sistema simple para gestionar inventario de productos, permitiendo agregar, eliminar y modificar:

$productos = [
    "Leche" => 1.50,
    "Harina" => 2,
    "Huevos" => 2.87,
    "Pan" => 0.60
];


function agregarProductos(&$productos, $producto, $precio){
    $productos[$producto] = $precio;
}

function eliminarProductos (&$productos, $producto){
    unset($productos[$producto]);
}

function mostrarProductos (&$productos, $producto, $precio){
    foreach ($productos as $producto => $precio){
        echo "El precio del producto " .$producto. " es de " .$precio. " €" ."\n";
    }
}

function modificarPrecio (&$productos, $producto, $nuevoPrecio){
    if (array_key_exists($producto, $productos)) {
        $productos[$producto] = $nuevoPrecio;
    } else {
        echo "No existe dicho producto en nuestro mercado";
    }
} 
foreach($productos as $producto => $precio){
    echo "El precio de " .$producto. " es de: " .$precio. " €" ."\n";
}
echo "\n";
echo "Hasta aqui la primera lista de productos";
echo "\n";



agregarProductos($productos, "Pasta", 2.20);
eliminarProductos($productos, "Leche");
modificarPrecio($productos, "Harina", 1.1);

foreach($productos as $producto => $precio){
    echo "El precio de " .$producto. " es de: " .$precio. " €" ."\n";
}

?>