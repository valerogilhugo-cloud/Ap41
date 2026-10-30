<?php
    $clasificacion = ["Ana", "Oswaldo", "Raúl", "Celia", "María", "Antonio"];

    echo "Clasificación inicial<br>";
    for ($i = 0; $i < count($clasificacion); $i++) {
        echo ($i + 1) . "º. " . $clasificacion[$i] . "<br>";
    }

    $personaTemporal = $clasificacion[2];
    $clasificacion[2] = $clasificacion[3];
    $clasificacion[3] = $personaTemporal;

    array_pop($clasificacion);
    array_splice($clasificacion, 1, 0, ["Roberto", "Amaya"]);
    array_unshift($clasificacion, "Marta");

    echo "Clasificación actualizada<br>";
    for ($i = 0; $i < count($clasificacion); $i++) {
        echo ($i + 1) . "º. " . $clasificacion[$i] . "<br>";
    }

?>