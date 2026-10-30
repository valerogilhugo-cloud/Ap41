<?php
    $tamaño = $_GET["tamano"];
    $numero = 1;
    $sol = 0;
    $cont = 0;
    
    do {
        $primo = true;

        if ($numero < 2) {
            $primo = false;
        } else {
            for ($cont2 = 2; $cont2 < $numero; $cont2++) {
                if ($numero % $cont2 == 0) {
                    $primo = false;
                    break;
                }
            }
        }

        if ($primo) {
            $sol = $numero;
            $cont++;
            echo "$sol <br>";
        }

        $numero++;
    } while ($cont < $tamaño);
?>