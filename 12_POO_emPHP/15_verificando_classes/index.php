<?php
    class Humano{
        public $idade;
        public $nome;
        public $profissao;

        public function falar (){

        }

        public function andar(){}

    }

    if(class_exists("Humano")){
        echo "A classe extiste <br> ";
    }

    print_r(get_class_vars("Humano"));//imprime array com as prorieades da classe
    print_r(get_class_methods("Humano"));//imprime array com os metodos da classe


?>