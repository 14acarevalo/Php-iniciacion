<?php

$tareas = [
    "Comprar pan" => false,
    "Hacer la cama" => true,
    "Hacer la comida" => false,
    "Estudiar" => true
];

function agregarTarea($tareas, $tarea) {
    $tareas[$tarea] = false;
}

function eliminarTarea($tareas, $tarea) {
    unset($tareas[$tarea]);
}

function modificarTareas($tareas, $tarea){ //Es lo mismo que marcar la tarea
    if(array_key_exists($tarea, $tareas)){
        $tareas[$tarea] = true;
    } else {
        echo "No existe dicha tarea, lo siento";
    }
}

agregarTarea($tareas, "Limpiar la casa") ."\n";
eliminarTarea($tareas, "Estudiar") ."\n";
modificarTareas($tareas, "Comprar el pan") ."\n";

foreach($tareas as $tarea => $completada){
    echo "La tarea " .$tarea. " esta: " .$completada. "\n";
}



?>