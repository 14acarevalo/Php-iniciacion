<?php
$animales = [
    "Perro",
    "Gato",
    "Canario",
    "Tortuga"
];

$habilidades = [
    "Correr",
    "Saltar",
    "Cantar",
    "Flotar"
];

foreach ($animales as $animal) {
    echo "Nombre: " .$animal. "\n";
}

foreach ($habilidades as $habilidad) {
    echo "Habilidad: " .$habilidad. "\n";
}

$concatenacion = array_combine($animales, $habilidades);

foreach($concatenacion as $animales => $habilidades) {
    echo "El animal " .$animales. " tiene una habilidad de: " .$habilidades. "\n";
}

?>