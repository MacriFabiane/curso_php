<?php
    //função substr(str, ini, fim) str é a string em q se procura a sub

    $str="Esta é a minha string";

    $minha =substr($str, 10, 5);

    echo $str . "<br>";
    echo $minha . "<br>";

    $palavrasFinais = substr($str, 10); //sem o parametro final da sub vai pegar todo o resto
    echo $palavrasFinais . "<br>";

    $novaString = substr($str, 8, -3); //comprimento negativo vai tirar os 3 ultimos carcteres
    echo $novaString . "<br>";

     echo substr_compare($str, $minha, 10, strlen($minha)); //10 posição q minha estaria em str, retorna 0 se iguais 1 se str menor e -1 se str maior
?>