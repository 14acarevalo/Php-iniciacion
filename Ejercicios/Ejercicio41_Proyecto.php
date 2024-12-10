<?php

$peliculas = [
    "El señor de los anillos" => 120,
    "Harry Potter"=> 110,
    "Star Wars" => 100
];

function agregarPelicula (&$peliculas, $pelicula, $votos){
    $peliculas[$pelicula] = $votos;
}

function votarPelicula(&$peliculas, $pelicula){
    if (array_key_exists($pelicula, $peliculas)){
        $peliculas[$pelicula] ++;
    } else {
        echo "La pelicula " .$pelicula. " no está en la lista";
    }
}

agregarPelicula($peliculas, $Vengadores, 3000);
votarPelicula($peliculas, "Star Wars");
votarPelicula($peliculas, "Harry Potter");
votarPelicula($peliculas, "El señor de los anillos");

foreach ($peliculas as $pelicula =>$votos){
    echo "La pelicula ".$pelicula. " tiene un total de: " .$votos. " votos". "\n";
}

asort($peliculas);

echo "Peliculas ordenadas de menor a mayor puntuación: " ."\n";
foreach ($peliculas as $pelicula =>$votos){
    echo "La pelicula ".$pelicula. " tiene un total de: " .$votos. " votos". "\n";
}




?>