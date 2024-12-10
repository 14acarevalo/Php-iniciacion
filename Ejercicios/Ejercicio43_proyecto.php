<?php
//En este proyecto, se va a crear un sistema de calificaciones para el estudiante

$estudiantes = [
    "Alberto" => 8,
    "Sandra" => 10,
    "Pablo" => 10,
    "Fernando" => 9,
    "Isabel" => 9
];

function agregarCalificacion (&$estudiantes, $estudiante, $nota){
    $estudiantes[$estudiante] = $nota;
}

function eliminarCalificacion (&$estudiantes, $estudiante){
    unset($estudiante[$estudiante]);
}

function modificarCalificacion (&$estudiantes, $estudiante, $notaNueva){
    if (array_key_exists($estudiante, $estudiantes)){
        $estudiantes[$estudiante] = $notaNueva;
    } else {
        echo "No existe dicho estudiante, no hay cambios";
    }
}

function mostrarInformacion(&$estudiantes, $estudiante, $nota){
    foreach ($estudiante as $estudiante => $nota){
        echo "La nota del estudiante " .$estudiante. " es de " .$nota. " puntos". "\n";
    }
}

function mediaCalificacion (&$estudiantes){
    if(count($estudiantes)>0){
        $suma = array_sum($estudiantes);
        return $suma/count($estudiantes);
    } else {
        echo "No se puede realizar al no contar con estudiantes";
    }

}

function calificacionMásAlta ($estudiantes){
    $mayor = 0;
    foreach ($estudiantes as $estudiante => $nota){
        if ($nota > $mayor){
            $mayor = $nota;
        }
    }
    return $mayor;
}

function calificacionMásBaja ($estudiantes){
    $menor = reset($estudiantes);
    foreach ($estudiantes as $estudiante => $nota){
        if ($nota < $menor){
            $menor = $nota;
        }
    }
    return $menor;
}

agregarCalificacion($estudiantes, "Julian", 6.1);
modificarCalificacion($estudiantes, "Alberto", 6);

foreach ($estudiantes as $estudiante => $nota){
    echo "La nota del estudiante " .$estudiante. " es de " .$nota. " puntos". "\n";
}

$promedio = mediaCalificacion($estudiantes);
echo "Promedio de notas es igual a: " .$promedio;
$mejorEstudiante = calificacionMásAlta($estudiantes);
$peorEstudiante = calificacionMásBaja($estudiantes);


?>