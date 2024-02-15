<?php
    $arr=[
        'Matheus' =>29,
        'Pedro'=>18,
        'Joaquim'=>12,
        'Maria'=>14,

    ];

    asort($arr);//oredena pelos valores do array crescentes nesse caso a idade

    print_r($arr);
    echo "<br>";

    $arr2=[
        'Pedro'=>18,
        'Matheus' =>29,
        'Joaquim'=>12,
        'Maria'=>14,

    ];

    arsort($arr2);//oredena pelos valores do array decrescentes nesse caso a idade

    print_r($arr2);
    echo "<br>";

    ksort($arr2);//ordena pelos nomes das chaves crescente

    print_r($arr2);
    echo "<br>";

    
    krsort($arr2);//ordena pelos nomes das chaves decrescente

    print_r($arr2);
    echo "<br>";


?>