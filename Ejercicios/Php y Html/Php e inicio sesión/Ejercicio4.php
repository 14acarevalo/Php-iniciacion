<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4_arranca_de_sesion</title>
</head>
<body>
<?php
session_start();
$nombre = "Alberto";
$pass = "1234567";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre_usuario = htmlspecialchars([$_POST["nombre"]]);
    $pass_usuario = htmlspecialchars($_POST["pass"]);

    if ($nombre_usuario == $nombre && $pass_usuario == $pass) {
        echo "Datos introducidos correctamente, nombre: $nombre - contraseña: $pass";
    } else {
        echo "Datos erroneos";
    } 
} else {
    echo "Error al introducir los datos";
}
?>
<form action="" method="POST">
    Usuario: <input type="text" name="nombre" required /><br />
    Contraseña: <input type="password" name="pass" required /><br /> <!-- Cambiado a "pass" -->
    <input type="submit" value="Iniciar Sesión">
</form>


</body>
</html>