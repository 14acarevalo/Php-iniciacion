<?php
$color = $_POST[$color];


if ($color == "azul") {
    $mensaje = "Tu color favorito es el azul";
} elseif ($color == "verde"){
    $mensaje = "Tu color favorito es el verde";
} elseif ($color == "rojo"){
    $mensaje = "Tu color favorito es el rojo";
}

echo $mensaje;
?>