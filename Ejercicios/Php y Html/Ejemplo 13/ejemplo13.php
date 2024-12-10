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
$correo = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $password = htmlspecialchars($_POST["password"]);
    if (!empty($_POST["nombre"]) &&  !empty($_POST["correo"]) && !empty($_POST["password"])) {
        echo "Datos introducidos correctamente";
   
    if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
        echo "El correo es valido";
    }else {
        echo "Correo no válido";
    }
} else{
    echo "Datos vacios";
}
}
?>  
<form action="" method="POST">
    Nombre: <input type="text" name="nombre" value=" <?php echo $nombre; ?>"/><br />
    Correo: <input type="text" name="correo" value="<?php echo $correo; ?>"/><br />
    Contraseña: <input type="password" name="password" value="<?php echo $password; ?>"/><br />
    <input type="submit" value="Iniciar Sesión">
</form>

</body>
</html>

