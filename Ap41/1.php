<?php
    $numeros = [5, 7, 10, 6, 2];
    $media = 0;
    for($i = 0; $i < count($numeros); $i++) {
        $media += $numeros[$i];
    }
    $media = $media /$i;
    echo "La media aritmética es: " . $media;
?>