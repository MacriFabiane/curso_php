<?php

    $cor ="rosa";

    $arr = [
        'cor' => "vermelho",
        'forma' => "retangular",
        'material' => 'aço'
    ];

    echo $cor . "<br>";

    extract($arr);

    echo $cor . "<br>";//extract do arr sobreescreve
    echo $forma . "<br>";
    echo $material . "<br>";
?>