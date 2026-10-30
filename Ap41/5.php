<?php
    $jugadores = [1, 2];
    $sol1 = 0;
    $sol2 = 0;

    foreach ($jugadores as $jugador) {
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);

        if ($jugador == 1) {
            $sol1 = $dado1 + $dado2;
        } elseif ($jugador == 2) {
            $sol2 = $dado1 + $dado2;
        }
    }

    if ($sol1 > $sol2) {
        echo "Gana el jugador 1";
    } elseif ($sol1 < $sol2) {
        echo "Gana el jugador 2";
    } else {
        echo "Empate";
    }
?>