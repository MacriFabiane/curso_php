<?php

class Animal {
    public $nome;
    function escolherNome($nome){
        $this->nome =$nome;//modificando a propriedade da classe a partir do método

    }

    function latir(){
        return "au au au <br>";
    }

    function latirForte(){
        return strtoupper($this->latir());//chamar metodos com this
    }
}

$frida = new Animal;

echo "O nome do animal é: $frida->nome <br>";

$frida->escolherNome("Frida");

echo "O nome do animal é: $frida->nome <br>";

echo $frida->latir();
echo $frida->latirForte();