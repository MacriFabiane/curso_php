<?php
/*crie um array de 1 a 10
utilize um loop para criar esse array
use array_push(arr, elemento) para inserir um elemento em um array */

$arr=[];

for ($i=0; $i<10; $i++){
    array_push($arr, $i+1);

    if($arr[$i]%2 !=0){
        echo "Numero ímpar $arr[$i] <br>";
    }
}

print_r($arr);
?>