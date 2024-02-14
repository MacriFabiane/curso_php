<?php
    /*crie um array multidimencional de 3 array de 4 elementos cada, imprima
    todos os elementos de cada um dos arrays 
    imprima também quando está mudando de array */

    $arr= [
        range(1,4),
        range(5,8),
        range(9,12)
    ];

    print_r($arr);
    echo "<br>";

    for($i=0; $i<count($arr); $i++){
        echo "array interno $i -> ";
        for($j=0; $j< count($arr[$i]); $j++){
            echo $arr[$i][$j] . ",\t";
        }
        echo "<br>";
    }
?>