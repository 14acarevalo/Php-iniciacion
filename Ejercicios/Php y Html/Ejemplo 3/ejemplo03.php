<?php
$idioma = $_POS['idioma'];

if ($idioma == "es"){
    $bienvenida == "Tu nombre completo es: ";
} elseif ($idioma == "en") {
    $bienvenida == "Your name is: ";
} 

echo $bienvenida. $_POST['nombre']. $_POST['apellidos'];


?>