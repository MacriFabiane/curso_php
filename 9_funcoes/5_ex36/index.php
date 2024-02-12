<?php

function newArray($arr){
    $arrNew=[];

    for ($y = 0; $y<count($arr); $y++){

        if($arr[$y] > 7){
            array_push($arrNew, $arr[$y]);
        }
    }

    return $arrNew;
}

$arr =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

print_r(newArray($arr));



?>