<?php
    $data = new DateTime();

    print_r($data);
    echo "<br>";

    //data atual
    echo $data->format('d/m/y') . "<br>";
    echo $data->format('D-M-Y') . "<br>";
    echo $data->format('l, F-Y') . "<br>";

    //data = 5 dias
    $data->modify('+5 days'); //salva na memoria já q é objeto

    echo $data->format('d/m/y') . "<br>";

    $data->modify('+1 month'); //salva na memoria

    echo $data->format('d/m/y') . "<br>";

    $data->modify('-9 years'); //salva na memoria

    echo $data->format('d/m/y') . "<br>";


?>