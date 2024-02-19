<?php
    class Humano{
        public function falar (){
            echo "Olá";
        }
    }

    $matheus = new Humano;

    if(is_object($matheus)){
        echo "É um objeto <br>";
    }else {
        echo "não é objeto <br>";
    }

    $teste= 10;
    if(is_object($teste)){
        echo "É um objeto <br>";
    }else {
        echo "não é objeto <br>";
    }

    echo get_class($matheus) . "<br>"; //retorna a classe do objeto

    if(method_exists($matheus, "falar")){
        echo "existe o metodo <br> ";
    }else{
        echo "não existe <br>";
    }

    if(method_exists($matheus, "asd")){
        echo "existe o metodo <br> ";
    }else{
        echo "não existe metodo <br>";
    }
?>