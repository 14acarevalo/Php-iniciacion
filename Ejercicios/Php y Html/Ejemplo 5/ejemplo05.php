<?php

echo "Hola " .$_POST['nombre']. " " .$_POST['apellidos'];
echo "Tus intereses son: ";
foreach ($_POST[$intereses] as $interes) {
    echo "Intereses en tu tiempo libre: " .$interes;
}

?>