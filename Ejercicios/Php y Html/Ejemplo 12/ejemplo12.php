<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$nombre = "";
$correoElectronico = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['nombre']) && (!empty($_POST['correoElectronico'])) && (!empty($_POST['password']))){
        echo "Datos correctos introducidos, $nombre, $correoElectronico y $password";
    } else {
        echo "Los datos introducidos no son los correctos";
    }
}
?>
<form action="" method="POST">
    Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>"/><br />
    Correo: <input type="text" name="correo" value="<?php echo $correo; ?>"/><br />
    Contraseña: <input type="password" name="contraseña" value="<?php echo $contraseña; ?>"/><br />
    <input type="submit" value="Registrar">
</form>
</body>
</html>