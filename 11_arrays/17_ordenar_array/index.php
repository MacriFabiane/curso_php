<?php

    $arr = [2,1,334, 32,123,65,9999,12,4];

    sort($arr);//ordena o array em ordem crescente

    print_r($arr);
    echo "<br>";

    $arr2 = [2,1,334, 32,123,65,9999,12,4];

    rsort($arr2);//oredena em ordem decrescente

    print_r($arr2);
    echo "<br>";

    $nomes=['Maria', 'José', 'Celbit', "Alice", 'João', "Matheus"];

    sort($nomes);//problemas com acentos

    print_r($nomes);
    echo "<br>";
?>