<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar_preferencias_usuario</title>
</head>
<body>
<?php
session_start();
$nombre = "Alberto";
$pass = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre_usuario = htmlspecialchars($_POST["nombre"]);
    $pass_usuario = htmlspecialchars($_POST["pass"]);
    $preferencias_usuario = htmlspecialchars($_POST["preferencias"]);

    if($nombre_usuario == $nombre && $pass_usuario == $pass) {
        echo "Datos introducidos correctamente";
        $_SESSION["preferencias"] = $preferencias_usuario;
        
        echo "Las preferencias del usuario son: $preferencias";
    } else { 
        "Por favor, introduce los datos bien ya que son erroneos";
    }
} else {
    echo "Introduce tus datos";
}
?>
<form action="" method="POST">
    Usuario: <input type="text" name="nombre" required /><br />
    Contraseña: <input type="password" name="pass" required /><br />
    <label for="preferencias">Selecciona una preferencia:</label>
    <select name="preferencias" required>
            <option value="leer">Leer</option>
            <option value="comer">Comer</option>
            <option value="deporte">Hacer deporte</option>
            <option value="estudiar">Estudiar</option>
        </select>
    <input type="submit" value="Iniciar Sesión">
</form>
</body>
</html>