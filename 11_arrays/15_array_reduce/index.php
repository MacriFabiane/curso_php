<?php
    $arr=[1, 2, 4, 19, 234, 12, 34, 5, 12];

    function soma($a, $b){
        return $a + $b;
    }

    $result = array_reduce($arr, "soma");//função passada por string, sempre vai retornar um unico valor

    echo "$result <br>";
?>