<?php

    date_default_timezone_set('America/Sao_Paulo');//define nova timezone (antes era Berlin)
    //mais indicado calcular a diferença sabendo a timezone prédefinida
    //usar o date_default_timezone_set é uma medida mais brusca
    $data =new DateTime();

    print_r($data);
    echo "<br>";
?>