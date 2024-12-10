
<?php
if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['dni'])) {
    echo "Hola, ".$_POST['nombre']." ".$_POST["apellidos"]."<br/>";
    $dni=$_POST['dni'];
    $patron='/^[0-9]{8}[A-Z]{1}$/';
    if(preg_match($patron,$dni)) {
        echo "Tu DNI $dni es válido";
    }
    else {
        echo "Tu DNI $dni no tiene un formato válido";
    }
}
else {
    echo "Debes introducir el DNI para poderlo validar";
}



$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];


if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && ($_POST ['dni'])){
    echo "Hola, tu nombre es " .$_POST['nombre']. " con apellidos " .$_POST['apellidos']; 
    $dni = $_POST['dni'];
    $patron = '/^[0-9]{8}[A-Z]{1}$/';
    if(preg_match($dni, $patron)){
        echo "Datos correctos de tu $dni"; 
    } else {
        echo "Datos incorrectos";
    }
} else {
    echo "Campos vacios";
}




?>


