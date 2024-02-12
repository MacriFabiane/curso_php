<?php

    //retorna um array 
    function alteraDados($nome, $idade){
        
        $nome = "Srta. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    $dados = alteraDados("Macri", 19);

    print_r($dados);

    echo "<br>" . "Olá $dados[0], você tem $dados[1]";
?>