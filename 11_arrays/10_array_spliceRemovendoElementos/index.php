<?php
    //resgatar elementos
    //remover elementos

    $arr = [1,2,3,4,5,6];

    $removidos =array_splice($arr, 1, 2); //apartir do indice 1 remova 2 elementos

    print_r($arr);
    echo "<br>";

    print_r($removidos);
    echo "<br>";

    $arr2 = [1,2,3,4,5,6];

    $removidos2 =array_splice($arr2, 3);//omitindo o ultimo pega todo o resto apartir do ind 3

    print_r($arr2);
    echo "<br>";

    print_r($removidos2);
    echo "<br>";

    $arr3 = [1,2,3,4,5,6];

    $removidos3 =array_splice($arr3, 1, -1);//a partir de 6 tire todos até o ind 1

    print_r($arr3);
    echo "<br>";

    print_r($removidos3);
    echo "<br>";
?>