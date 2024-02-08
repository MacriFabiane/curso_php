<?php

    //VARIAVEL LOCAL 
    //definida dentro de uma função, n é acessível fora dela mesma, valor resetado quando a função é finalizada

    $x =10;//VARIAVEL GLOBAL

    echo "$x global <br>";//não são acessíveis dentro de funções

    function teste(){
        $x =5;

        echo "$x local <br>";
    }

    teste();

    //VARIAVEL ESTÁTICA
    //o valor da mesma é mantido e alterado a cada execução de uma função

    function testes(){
        $a = 0;
        $a++;

        echo "$a <br>";

    }

    testes();
    testes();
    testes();

    function testesStatic(){
        static $a = 0; //declaração da var estática 
        $a++;

        echo "$a <br>";

    }

    testesStatic();
    testesStatic();
    testesStatic();

    //PARAMETROS DE FUNÇÃO

    function soma($a, $b){
        echo $a + $b;
        echo "<br>";
    }

    soma(2, 4);
    soma(2,8);
    soma(10,10);

    $a = 0;//declara global
    function testes2(&$a){//passa estática
        $a++;

        echo "$a <br>";

    }

    testes2($a);
    testes2($a);
    testes2($a);
 
?>