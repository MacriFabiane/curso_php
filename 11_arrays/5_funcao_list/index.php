<?php

    $pessoa= ["Matheus", 29, "programador", "verdes"];
    print_r($pessoa);
    echo "<br>";

    list($nome, $idade, $profissao, $corDosOlhos)= $pessoa; //vai atribuir a cada uma dessas variaveis o valor contido nos indices do array

    echo "$nome <br> $idade <br> $profissao <br> $corDosOlhos";
?>