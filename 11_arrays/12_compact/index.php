<?php

    $marca ="bmw";
    $motor ="3.0";
    $tetoSolar =true;
    $portas =4;

    $carro = compact( "marca", "motor", "tetoSolar", "portas"); //igual

    print_r($carro);

?>