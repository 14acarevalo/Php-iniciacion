<?php

$idioma = $_GET;
if ($idioma = "en"){
    $bienvenida = " Your name is: ";
} elseif ($idioma ="es") {
    $bienvenida = " Tu nombre  completo es : ";
}

echo $bienvenida . $_GET['nombre'] .$_GET['apellidos'];

?>