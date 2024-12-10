<?php

$nombre = $_POST[$nombre];
$password = $_POST[$password];
$correoElectronico = $_POST[$correoElectronico];
$direccion = $_POST[$direccion];

if (!empty($_POST[$nombre]) && !empty($_POST[$password]) && !empty($_POST[$correoElectronico]) && !empty($_POST[$direccion])){
    echo "Datos introducidos correctamente";
    echo "\n";
    echo "Nombre: ".$_POST['nombre']. " - ".$_POST['password']. " - " .$_POST['correoElectronico']. " - " .$_POST['direccion'];
}

?>