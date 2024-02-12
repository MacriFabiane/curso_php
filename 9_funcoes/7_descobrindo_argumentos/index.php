<?php

    function soma ($a, $b){
        print_r(func_get_args()); //printa os argumentos passados para a função
        echo "<br>" . func_num_args() . "<br>"; //printa a quantidade de arguanetos
        
        return $a +$b;
    }

    soma(2,5);

    //exercicio contdor vogais

function countVowels($str){
    $cont =0;
    for ($i=0; $i<strlen($str); $i++){
        if(strpos("aeiouAEIOU", $str[$i]) !== false){ //verifica se um caractere está numa string
            $cont++;
        }
    }
    return $cont;
}

$arr ="a";

$c = countVowels($arr);

echo $c;


?>