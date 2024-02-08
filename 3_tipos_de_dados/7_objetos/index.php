<?php

    class Pessoa{

        function falar(){
            echo "Olá pessoal!";
        }
    }

    $mateus = new Pessoa();

    $mateus->nome = "Mateus"; //atribuindo uma propriedade nome ao mateus

    echo $mateus->nome;

    echo "<br>";

    $mateus->falar(); //flechinas pra acessar tanto propriedades quanto metodos


?>