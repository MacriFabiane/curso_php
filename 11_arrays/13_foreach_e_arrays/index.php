<?php
    $pessoa =[
        'nome'=>'macri',
        'idade'=>19,
        'profissao'=>'programadora'
    ];

    $pessoa2 =[
        'nome'=>'mabel',
        'idade'=>19,
        'profissao'=>'programadora'
    ];

    foreach($pessoa as $carac => $value){

        echo "$carac => $value <br>";
    }

    foreach($pessoa2 as $value){
        echo " => $value <br>";
    }

    foreach($pessoa2 as $carac){ //se n botar var => antes n entende a chave só valores
        echo "$carac => <br>";
    }
?>