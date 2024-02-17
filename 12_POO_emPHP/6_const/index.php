<?php
    class Humano{
        public const OLHOS = 2;//não precisa do cifrão pra constantes
        public const BRACOS =2;
        public const PERNAS =2;

        function mostrarConstante(){
            echo self::BRACOS . '<br>'; //usa self:: no método ao invés do this
        }

    }

    $matheus = new Humano;


    echo $matheus::OLHOS . "<br>";//pra acessar constantes sempre ::
    $matheus->mostrarConstante();
?>