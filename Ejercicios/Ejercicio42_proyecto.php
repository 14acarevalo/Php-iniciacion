<?php

//Primer proyecto, creación de un sistema simple para gestionar inventario de productos, permitiendo agregar, eliminar y modificar:

$productos = [
    "Leche" => ["precios" => 1.50, "categoria" => "Lácteos"],
    "Harina" => ["precios" => 3, "categoria" => "Alimento"],
    "Huevos" => ["precios" => 2.87, "categoria" => "Alimentos"],
    "Agua" => ["precios" => 1.50, "categoria" => "Bebidas"]
];


function agregarProductos(&$productos, $producto, $precios, $categoria){
    $productos[$producto] = ["precios" => $precios, "categoria" => $categoria];
}

function eliminarProductos (&$productos, $producto){
    unset($productos[$producto]);
}

function mostrarProductos (&$productos, $producto, $precios, $categoria){
    foreach ($productos as $producto => ["precios" => $precios, "categoria" => $categoria] ){
        echo "El precio del producto " .$producto. " es de " .$precios. " € y pertenece a la categoria de " .$categoria ."\n";
    }
}

function modificarPrecio (&$productos, $producto, $nuevoPrecio, $categoria){
    if (array_key_exists($producto, $productos)) {
        $productos[$producto] = ["precios" => $nuevoPrecio, "categoria" => $categoria];
    } else {
        echo "No existe dicho producto en nuestro mercado";
    }
} 

function aplicarDescuento(&$productos, $categoria, $porcentajeDescuento) {
    foreach ($productos as $producto => &$detalles) {
        if ($detalles["categoria"] == $categoria) {
            $descuento = $detalles["precios"] * ($porcentajeDescuento / 100);
            $detalles["precios"] -= $descuento;
        }
    }
}

foreach ($productos as $producto => ["precios" => $precios, "categoria" => $categoria] ){
    echo "El precio del producto " .$producto. " es de " .$precios. " € y pertenece a la categoria de " .$categoria ."\n";
}
echo "\n";
echo "Hasta aqui la primera lista de productos";
echo "\n";
agregarProductos($productos, "Pasta", 2.20, "Alimentos");
eliminarProductos($productos, "Leche");
modificarPrecio($productos, "Harina", 1.1, "Alimentos");

foreach ($productos as $producto => ["precios" => $precios, "categoria" => $categoria] ){
    echo "El precio del producto " .$producto. " es de " .$precios. " € y pertenece a la categoria de " .$categoria ."\n";
}
$descuento = aplicarDescuento($productos, "Lácteos", 50);
echo "El precio de mi lacteo con descuento, pasa a ser de: ".$descuento. " €";
?>