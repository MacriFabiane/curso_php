<?php

    $frase = "Testando o explode";

    $fraseArray =explode(" ",$frase);

    print_r($fraseArray);

    $fraseArray =explode(",",$frase);//não acha o separador delimitador então vira array de um item só

    print_r($fraseArray);

?>