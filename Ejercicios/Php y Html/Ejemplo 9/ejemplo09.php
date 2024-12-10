<?php
$unidad = $_POST['unidad'];
$medida = $_POST['medida'];


if ($medida == "pulgada"){
    echo "El resultado es igual a " .$unidad*2.54. " centimetros";
} elseif ($medida == "pie"){
    echo "El resultado es igual a " .$unidad*30.48. " centimetros";
} elseif ($medida == "yarda"){
    echo "El resultado es igual a " .$unidad*91.44. " centimetros";
} elseif ($medida == "milla"){
    echo "El resultado es igual a " .$unidad*1609 . " metros";
} else {
echo "Unidad no reconocida...";

}


?>