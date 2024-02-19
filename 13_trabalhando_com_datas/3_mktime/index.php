<?php
    $dataNasc= mktime(02, 12, 33, 02, 05, 1991); //h min s mes dia ano

    echo $dataNasc . "<br>";

    $dataNascFormatada = date('d/m/Y', $dataNasc);

    echo $dataNascFormatada . "<br>";
?>