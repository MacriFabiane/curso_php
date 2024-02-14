<?php
    $arr =[
        'nome'=>'Macri',
        'idade'=>19
    ];

    if(array_key_exists("nome", $arr)){//retorna true or false
        echo "chave existe <br>";
    }
    else{
        echo "chave não existe <br>";
    }

    if(isset($arr['teste'])){ //mesmo uso do array_key_exists
        echo "isset chave existe <br>";
    }
    else{
        echo "isset chave não existe <br>";
    }

    if(isset($x)){ //serve para variaveis tbm
        echo "isset a var existe <br>";
    }
    else{
        echo "isset a var não existe <br>";
    }
    
?>