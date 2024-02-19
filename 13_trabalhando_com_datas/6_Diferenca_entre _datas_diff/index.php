<?php
    $dataA= new DateTime(); 
    $dataB = new DateTime();

    $dataB->setDate(2001, 10,15);

    print_r($dataA);
    echo "<br>";
    print_r($dataB);

    $diferenca = $dataA->diff($dataB);

    print_r($diferenca);
    echo "<br>";
    echo $diferenca->format('%y years %m months and %a days'); //dias de diferenca
?>