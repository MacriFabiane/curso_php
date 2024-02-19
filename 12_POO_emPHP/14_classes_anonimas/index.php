<?php
    $pessoa = new class(){

        public $nome = "Matheus";

        public function dizerNome(){
            echo "Oi, sou o $this->nome <br>";
        }
    };

    echo $pessoa->nome . "<br>";
    $pessoa->dizerNome();
?>