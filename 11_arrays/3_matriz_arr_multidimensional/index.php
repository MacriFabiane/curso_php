<?php

    $arr=[
        [1, 2, 3],
        [4, 5, 6]
    ];

    print_r($arr);
    echo "<br>";

    echo $arr[0][1]. "<br>"; //acessando primeiro array e segundo elemento
    echo $arr[1][2]. "<br>";

    echo count($arr);//quant de elementos  do array principal
    echo count($arr[0]);//quant de elemento do primeiro array interno
?>