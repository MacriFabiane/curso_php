<?php

    echo 2 . 3; //numeros q viram strig
    echo "<br>";

    if(is_string(2 . 3)){
        echo "É string <br>";
    }

    $nome = "Maria";
    $sobrenome = "Fabiane";

    $nomeCompleto= $nome . " " . $sobrenome; //concatenação de istings . espaço

    echo $nomeCompleto;
    echo "<br>";
?>