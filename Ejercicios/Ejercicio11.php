<?php
echo "En este programa vamos a hacer magia, buscaremos adivinar el número aleatorio";

$num_magico = $num_magico.rand(1,14);
echo "El número mágico, se encuentra entre el 1 y el 14 " ."\n";
$num_introducir = 7;

if ($num_introducir == $num_magico) {
    echo "Premio, has acertado el número mágico ya que el número introducido " .$num_introducir. " es igual a: " .$num_magico;
} else {
    echo "El número no es el acertado, lo siento :(" ."\n";
    echo "El número mágico era " .$num_magico;

}
?>