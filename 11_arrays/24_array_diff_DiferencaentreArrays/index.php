<?php
    $arr1= [1,2,3];
    $arr2=[2,4,6];

    $diff=array_diff($arr1, $arr2);//resulta oq n tem no 1 q n tem no 2

    print_r($diff);
    echo "<br>";

    $diff2=array_diff($arr2, $arr1);//resulta oq tem no 2 e n tem no 1

    print_r($diff2);
    echo "<br>";

    $arr3=[4, 6];

    $diff3=array_diff($arr2, $arr1, $arr3);//resulta oq tem no 2 e n tem no 1 nem no 3

    print_r($diff3);
    echo "<br>";
?>