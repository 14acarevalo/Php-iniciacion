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

if (isset($_SESSION["usuario"])) {
    echo "<h1>Bienvenido, " . htmlspecialchars($_SESSION["usuario"]) . "!</h1>";
    echo "<p><a href='logout.php'>Cerrar sesión</a></p>";
} else {
    header("Location: login.php");
    exit();
}


?>
</body>
</html>