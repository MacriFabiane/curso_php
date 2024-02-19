<?php
    class Humano{


    }

    class Dev extends Humano{

    }

    $marcos = new Humano;
    
    if($marcos instanceof Humano){
        echo "Marco é humano <br>";
    }
    else {
        echo "<arcos não é humano <br>";
    }
    
    $macri = new Dev;

    if($macri instanceof Dev){
        echo "Macri é dev <br>";
    }
    else {
        echo "Macri não é dev <br>";
    }
    
    if($macri instanceof Humano){ //funciona com herança tbm
        echo "Macri é humano <br>";
    }
    else {
        echo "Macri não é humano <br>";
    }
?>