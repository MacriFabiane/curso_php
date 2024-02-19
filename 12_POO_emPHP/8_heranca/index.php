<?php
    class Humano{
        public $idade =29;

        public function falar(){
            echo "Olá Mundo! <br>";
        }

        private function gritar(){
            echo "PHP É BOM!";
        }

        public function acessarGritar(){
            $this->gritar();
        }

        protected function falarBaixinho(){
            echo "lalala <br>";
        }

        public function acessarBaixinho(){
            $this->falarBaixinho();
        }
    }

    class Programador extends Humano{
        public function acessarBaixinhoProgramador(){
            $this->falarBaixinho(); //protected dá pra acessar nas classes filhas
        }
    }

    $ze = new Humano;

    $ze->falar();
    $ze->acessarGritar();
    $ze->acessarBaixinho();

    $matheus = new Programador;

    echo $matheus->idade . "<br>";

    $matheus->falar();
    $matheus->acessarGritar();
    $matheus->acessarBaixinhoProgramador();
