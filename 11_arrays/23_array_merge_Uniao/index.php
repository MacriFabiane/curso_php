<?php
    //une 2 ou mais array em 1 só

    $arr= [1,2,3];
    $arr1 =[10,40,90];
    $arr2=[2.1,44.5,43.3];
    $arr3=["macri"];

    $arrMerge= array_merge($arr, $arr1, $arr2, $arr3); //array completo com todos os itens do outro

    print_r($arrMerge);
    echo "<br>";
?>