<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $nombre_cliente = htmlspecialchars($_POST["nombre"]);
   $producto_usuario = htmlspecialchars($_POST["preferencias"]);

   echo "Nombre del cliente es igual a $nombre_cliente";
   $_SESSION["producto"] = $producto_usuario;
   header("Location: VerCarrito.php");   
   exit();
}else {
    echo "Introduce nombre del usuario";
}
?>
<form action="" method="POST">
    Usuario: <input type="text" name="nombre" required /><br />
    <label for="producto">Selecciona un producto:</label>
    <select name="preferencias" required>
            <option value="leche">Leche</option>
            <option value="pasta">Pasta</option>
            <option value="verdura">Verdura</option>
            <option value="pescado">Pescado</option>
        </select>
    <input type="submit" value="Añadir al carro">
</form>
</body>
</html>