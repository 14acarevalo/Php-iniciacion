<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Login</title>
</head>
<body>
<?php
session_start(); // Iniciar la sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_correcto = "admin";
    $contrasena_correcta = "12345"; // Cambiado a string para que coincida con el tipo de dato

    $usuario = htmlspecialchars($_POST["usuario"]);
    $password = htmlspecialchars($_POST["pass"]); // Cambiado a "pass" para que coincida con el nombre del input

    // Verificación de credenciales
    if ($usuario === $usuario_correcto && $password === $contrasena_correcta) {
        $_SESSION["nombre"] = $usuario; // Guardar el nombre de usuario en la sesión
        header("Location: welcome.php"); // Redirigir a la página de bienvenida
        exit();
    } else {
        echo "<h3>Credenciales no válidas</h3>"; // Mensaje de error
    }
}
?>  
<form action="" method="POST">
    Usuario: <input type="text" name="usuario" required /><br />
    Contraseña: <input type="password" name="pass" required /><br /> <!-- Cambiado a "pass" -->
    <input type="submit" value="Iniciar Sesión">
</form>
</body>
</html>
