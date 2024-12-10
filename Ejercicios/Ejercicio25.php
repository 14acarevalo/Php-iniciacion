<?php
echo "En este programa vamos a buscar dentro de un array el número más grande, el más mayor!!!";
$numeros = array (1,2,3,4,5,6,7,8,0,100);
$mayor = $numeros[0];
foreach ($numeros as $numero) {
    if ($numero > $mayor){
        $mayor = $numero;
    }
}
echo "El número mayor es: ".$mayor;

?>