<?php
session_start();

if (!isset($_SESSION["carrito"])) {
    $_SESSION["carrito"] = [];
}

// Agrega el producto al carrito
if (isset($_SESSION["producto"])) {
    $_SESSION["carrito"][] = $_SESSION["producto"]; // Agrega el producto al array del carrito
    unset($_SESSION["producto"]); // Opcional: elimina el producto temporal de la sesión
}


$_SESSION["carrito"] =[];
echo "Tu lista de la compra tiene los siguientes productos: ";
foreach ($_SESSION["carrito"] as $producto){
    echo "Producto" .$carro;
}



?>