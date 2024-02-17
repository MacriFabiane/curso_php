<?php

    class Pessoa{
        function falar(){
            echo "Olá eu sou um objeto! <br>";
        }
    }

    $matheus = new Pessoa;

    $matheus->falar();//utilizando o método no ojeto

    $joao = new Pessoa;

    $joao->falar();
?>