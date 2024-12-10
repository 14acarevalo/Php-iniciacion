<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Login y logout </title>
</head>
<body>
<?php
session_start();
$nombre = "Alberto";
$pass = "12345678";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre_usuario = htmlspecialchars[$_POST("nombre")];
    $pass_usuario = htmlspecialchars[$_POST("pass")];

    if ($nombre_usuario == $nombre && $pass_usuario == $pass) {
        $_SESSION["nombre"]== $nombre;
        header("Localizacion: welcome.php");
        echo "Tus datos son correctos";
        exit();
    } else {
        echo "Datos incorrectos, introducelos bien por favor";
    }
} else {
    echo "Introduce tus datos";
}





?>
</body>
</html>