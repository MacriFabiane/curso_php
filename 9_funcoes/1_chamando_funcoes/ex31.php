<?php
//crie um array com strings
//utilize a função implode no array
//primeiro argumaneto: ","
//segundo o seu array
//atribua a invocação da função a uma var e imprima o resultado

    $arr = ["Macri", "Mabel", "Bia", "Bruno", "Laura", "Carol"];

    $imp = implode(", ", $arr);//vai imprimindo cada item do array e botando uma virgula entre
//função implode tranforma o array em uma string
    echo $imp;


?>