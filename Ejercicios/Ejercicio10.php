<?php
echo "En este programa vamos a aprender a calcular le factorial" ."\n";
$factorial = 1;
$num = 2;
for ($i = 1; $i <= $num; $i ++) {
    $factorial = $factorial * $i;
}
echo "El resultado es igual a " .$factorial;



?>