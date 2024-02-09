<?php
//tudo aqui serve pra variaveis tbm

    //OP IGUALDADE ==


    if(3 == "3"){//true
        echo "comparação verdadeira 1 <br>";
    }

    if(3 == 3){//true
        echo "comparação verdadeira 1<br>";
    }

    //OP IDENTICO A ===

    
    if(3 === "3"){//false
        echo "comparação verdadeira 2 <br>";
    }
    
    if(3 === 3){//true
        echo "comparação verdadeira 2 <br>";
    }

    //OP DIFERENÇA !=


    if(3 != "3"){//false
        echo "comparação diferente 1 <br>";
    }

    if(3 != 3){//false
        echo "comparação diferente 1<br>";
    }

    if(false != "3"){//true
        echo "comparação diferente 2 <br>";
    }

    if(7 != 3){//true
        echo "comparação diferente 3 <br>";
    }

    //OP NÃO IDENTICO A !==  tem que ter valor e/ou tipos diferentes

    if(3 !== "3"){//true
        echo "comparação diferente 4 <br>";
    }

    if(3 !== 3){//false
        echo "comparação diferente 5<br>";
    }

    //OP MAIOR, MAIOR IGUAL, MENOR E MENOR IGUAL funcionamento como outras linguagens


?>