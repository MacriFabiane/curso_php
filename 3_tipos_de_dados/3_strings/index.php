<?php
    $idade = 15;

    echo "Ele tem $idade anos <br>";

    echo 'Ele tem $idade anos <br>'; //asapas simples não interpretam variáveis

    // CHECANDO SE É STRING

    $str = "macri";
    $num = 12;

    if(is_string($str)){
        echo "é string <br>";
    }

    if(is_string($num)){
        echo "é string <br>";
    }

    if(is_string("bah")){
        echo "é string <br>";
    }
?>