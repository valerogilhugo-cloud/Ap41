<?php
    $num1= [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)];
    $num2= [rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10)];

    if($num1=$num2){
        for($i=0; $i<count($num1); $i++){
            $sol = $num1[$i] * $num2[$i];
            echo $sol."<br>";
        }
    } else {
        echo "Los arrays no son iguales";
    }
?>