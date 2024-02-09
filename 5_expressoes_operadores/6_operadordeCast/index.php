<?php

    $a = (int) "12"; //se a string n for numero vira 0

    echo $a;
    echo "<br>";
    echo $a + 10;
    echo "<br>";

    if ($a===12){
        echo "A é identico a 12 <br>";
    }

    $b = (float) "3.1415";

    if($b === 3.1415){
        echo "B é identico a 3.1415 <br>";
    }

    $c = (string) 32;

    echo gettype($c) . "<br>" ;


    $d = (int) [1, 2, 3];

    echo gettype($d) . "<br>";
    echo $d; //vira 1
?>