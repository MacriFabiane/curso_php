<?php

    class Car{
        public $rodas;
        public $aro =20;
        public $cor = "vermelha";

        function ligar(){
            echo "Vruuuuuuu <br>";
        }
    }

    $ferrari = new Car;

    $ferrari->rodas =4;//inicializa um valor pra prop q n tinha

    echo $ferrari->aro . "<br>";
    echo $ferrari->rodas . "<br>";

    $ferrari->cor = "Azul"; //atribuindo/mudando valor de uma propriedade

    echo $ferrari->cor . "<br>";

    $ferrari->ligar();
?>