<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 14</title>
</head>
<body>
<?php
$nombre = "";
$correo = "";
$password = "";
$direccion = "";
$errores = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $correo = htmlspecialchars(trim($_POST["correo"]));
    $password = htmlspecialchars(trim($_POST["password"]));
    $direccion = htmlspecialchars(trim($_POST["direccion"]));

    // Validaciones
    if (empty($nombre)) {
        $errores[] = "El nombre no puede estar vacío.";
    }
    if (empty($correo) || !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo no es válido.";
    }
    if (strlen($password) < 6) {
        $errores[] = "La contraseña debe tener al menos 6 caracteres.";
    }
    if (empty($direccion)) {
        $errores[] = "La dirección no puede estar vacía.";
    }

    // Mostrar resultados
    if (empty($errores)) {
        echo "Los datos han sido introducidos de manera correcta y adecuada.";
    } else {
        foreach ($errores as $error) {
            echo $error . "<br />";
        }
    }
} else {
    echo "Datos vacíos.";
}
?>  
<form action="" method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>"/><br />
    Correo: <input type="text" name="correo" value="<?php echo $correo; ?>"/><br />
    Contraseña: <input type="password" name="password" value="<?php echo $password; ?>"/><br />
    Dirección: <input type="text" name="direccion" value="<?php echo $direccion; ?>"/><br />
    <input type="submit" value="Registrar">
</form>

</body>
</html>
