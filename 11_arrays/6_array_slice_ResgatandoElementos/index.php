<?php

    $arr = range(1,14);

    print_r($arr);

    $slice1 = array_slice($arr, 1, 3);//do indice 1 até ter 3

    print_r($slice1);
    echo "<br>";

    $slice2 = array_slice($arr, 5);//se emitir o final pega do inicial e todo o resto

    print_r($slice2);
    echo "<br>";

    $slice3 = array_slice($arr, 5, 5);//se emitir o final pega do inicial e todo o resto

    print_r($slice3);
    echo "<br>";

    $slice = array_slice($arr, 10, -2);//vai do indice 10 até o ultimo indice tirando os 2 últimos, ou melhor ele tira os ultimos 2 e vai de tras pra frente até chegar no indice 10

    print_r($slice);
    echo "<br>";
?>