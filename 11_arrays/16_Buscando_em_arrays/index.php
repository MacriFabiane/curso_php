<?php
    $arr =["banana", 'maça', 'batata', 'pêra', 'mamão'];

    if(in_array('batata', $arr)){
        echo "há o item batata no array <br>";
    }
    else {
        echo "não há batata no array <br>";
    }

    $b = "banana";

    if(in_array($b, $arr)){
        echo "há o item banana no array <br>";
    }
    else {
        echo "não há banana no array <br>";
    }

?>