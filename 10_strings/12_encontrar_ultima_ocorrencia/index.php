<?php

// para encontrar a primeira ocorrencia de um texto numa string usamos strpos
// para encontrar a última devemos utilizar strrpos, se recebermos algum valor é pq o texto foi encontrado se 0 ou false pq n

    $str = "Testando o encontro da palavra teste, em uma str que tem teste";

    $encontro = strrpos($str, "teste");//retorna o incide do começo da palavra

    echo $encontro . "<br>";

    $encontro = strpos($str, "teste");//retorna o incide do começo da palavra


    echo $encontro . "<br>";

    $p = substr($str, strrpos($str, "teste"), 5);//fica mais facil a extração de substrings

    echo $p . "<br>";
?>
