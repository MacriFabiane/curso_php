<?php

//crie um array com caracteristicas de uma pessoa
//faça um if checando se ela é maior de idade

    $pessoa =[
        'nome'=> "Macri",
        'idade'=> 19,
        'Sexo'=> "Feminino",
        'Cabelo'=> "curto e escuro"
    ];

    print_r($pessoa);
    echo "<br>";

    if ($pessoa['idade']>=18){
        $nome = $pessoa['nome'];
        echo "$nome é maior de idade";
    }


?>