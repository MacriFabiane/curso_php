<?php
    $cincoDias = strtotime("5 days");

    echo $cincoDias . "<br>";

    $dataAtualMais5= date('d/m/y', $cincoDias); //

    echo $dataAtualMais5 . "<br>";

    $doisMeses =strtotime("-2 months");

    $dataAtualMenos2Meses = date(('d/m/y'), $doisMeses);

    echo $dataAtualMenos2Meses . "<br>";

    echo date('d/m/y', strtotime("20 years")) . "<br>";
?>