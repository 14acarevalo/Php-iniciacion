<?php
echo "En este ejercicio, se van a comparar las edades, por lo tanto, será necesario el if/else para condiciones: " ."\n";
$edad1 = 22;
$edad2 = 30;

if($edad1>$edad2) {
    echo "El sujeto con edad " .$edad1. " es mayor que el sujeto con edad " .$edad2; 
} else if ($edad1==$edad2) {
    echo "Los dos tienen la misma edad, ya que " .$edad1. " es igual a " .$edad2;
} else if ($edad2 > $edad1) {
    echo "El sujeto con edad " .$edad2. " es mayor que el sujeto con edad " .$edad1; 
} else {
    echo "Macho, las edades están mal";
}
?>