<?php
//Este archivo es un repaso hacia los arrays, hacia su trabajo y hacia su desarrollo:

$numeros = array (1,2,3,4,5,6,7);
echo $numeros [1] ."\n";
echo $numeros [0]."\n";
echo $numeros [2]."\n";
echo $numeros [4]."\n";
echo $numeros [3]."\n";
echo $numeros [5]."\n";
echo $numeros [6]."\n";

$nombres = array("Nombre 1"=> "Alberto", "Nombre 2" => "Pablo", "Nombre 3"=>"Sandra"); 
echo $nombres["Nombre 1"] ."\n";
echo $nombres["Nombre 2"] ."\n";
echo $nombres["Nombre 3"] ."\n";

// Si quiesiera separarlos . "\n"


// Array - Asociativo - cada valor tiene asociado una clave
$familia = ["Padre" => "Fernando", 
            "Edad" => 61, 
            "Profesion" => "Jefe de obra"];

echo $familia["Padre"]."\n";
echo $familia["Edad"]."\n";
echo $familia["Profesion"]."\n";

?>