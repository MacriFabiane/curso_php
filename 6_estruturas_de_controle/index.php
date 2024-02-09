<?php
    //SWITCH

    $x=5;

    switch($x){

        case 0: 
            echo "X é igual a 0 <br>";
            break;

        case 1:
            echo "X é igual a 1 <br>";
            break;

        default:
            echo "x não é igual a nenhum dos valores mencionados <br>";
    }

    function compararNumeros($a, $b){
        if($a>$b){
            echo "O primeiro número é maior";
        }
        if ($b>$a){
            echo "O segundo número é maior";
        }
        if($a==$b){
            echo "Os números são iguais";
        }
        
    }

    compararNumeros(2,1);
    compararNumeros(2,3);
    compararNumeros(2,2);

?>