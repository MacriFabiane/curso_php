<?php

    $str1 = "Esta sring é grande";
    $str2 = "Esta não";

    echo strlen($str1) . "<br>";//conta acentos como caracteres
    echo strlen($str2) . "<br>";

    //PERCORRENDO UMA STRING

    for ($i =0; $i <strlen($str1); $i++){
        echo "$str1[$i] <br>";
    }


?>