<?php
    $numerosDni = [87654321];
    $letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    for ($i = 0; $i < count($numerosDni); $i++) {
        $numero = $numerosDni[$i];
        $indiceLetra = $numero % 23;
        $letraCorrespondiente = $letras[$indiceLetra];
        echo "El DNI es: " . $numero . "-" . $letraCorrespondiente . "<br>";
    }
?>