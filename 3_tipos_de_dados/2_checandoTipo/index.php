<?php

//  CHECANDO INTEIROS
if(is_int(5)){ //true
    echo "É um inteiro <br> \n"; // \n também pula linha (só no console de depuração do vs code) na web tem q ser o br
}

if(is_int("n é um inteiro")){ //false
    echo "É um inteiro <br>";
}

$a = 10;

if(is_int($a)){ //true
    echo "É um inteiro <br>";
}

// CHECANDO FLOATS

$a = 1.12;
$b = "teste";

echo $a;
echo "<br>";

echo 12.5 + 3;
echo "<br>";

echo 12.8 + 1.999;
echo "<br>";

if(is_float($a)){
    echo "É float <br>";
}

if(is_float($b)){
    echo "É float";
}

if (is_float(-1.23)){
    echo "É float";
}

?>