<?php
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    $i = 0;

    do{
    $dia= rand(1,31);
    $mes = rand(0,11);
    if ($meses[$mes] == "Febrero") {
        if ($dia < 28) {
            $dia = rand(1,28);
            echo "La fecha es: $dia de $meses[$mes]<br>";
            $i++;
    }
    }
    if ($meses[$mes] == "Abril" || $meses[$mes] == "Junio" || $meses[$mes] == "Agosto" || $meses[$mes] == "Septiembre" || $meses[$mes] == "Noviembre") {
        if ($dia < 30) {
            $dia = rand(1,30);
            echo "La fecha es: $dia de $meses[$mes]<br>";
            $i++;
    }
    }
    else {
        echo "La fecha es: $dia de $meses[$mes]<br>";
        $i++;
    }
    }while ($i<10);