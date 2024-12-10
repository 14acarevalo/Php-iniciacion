 
<!-- EJERCICIO SIMILAR AL ANTERIOR, PERO GRACIAS A ESTE PRACTICAMOS CON OTROS PARAMETROS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
</head>
<body>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nombre_admin ="admin";
    $password_admin = "123456";


    $nombre = htmlspecialchars($_POST["nombre"]);
    $password = htmlspecialchars($_POST["password"]);

        if ($nombre == $nombre_admin && $password == $password_admin){
            $_SESSION["nombre"] = $nombre;
            header("Location: welcome.php");
            exit();
        }else {
            echo "Los datos introducidos no son correctos";
        }
}else {
    echo "Credenciales no válidas";
}
?>
<form action="" method="POST">
    Usuario: <input type="text" name="nombre" required /><br />
    Contraseña: <input type="password" name="password" required /><br /> <!-- Cambiado a "pass" -->
    <input type="submit" value="Iniciar Sesión">
</form>
</body>
</html>





   

