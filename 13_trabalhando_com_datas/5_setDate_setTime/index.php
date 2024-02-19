<?php
    $data = new DateTime();

    print_r($data);
    echo "<br>";

    $data->setDate(1993,3,9); //não botar 0 na frente
    print_r($data);
    echo "<br>";

    $data->setTime(5,11,10); //não botar 0 na frente
    print_r($data);
    echo "<br>";

    echo $data->format('d/m/y') . "<br>";


?>