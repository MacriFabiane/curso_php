<?php
    $dataA=new DateTime();
    $dataB=new DateTime();
    $dataC= new DateTime();

    $dataB->setDate(2022,2,19);

    if($dataB > $dataA){
        echo "A data b é maior que a data a <br>";
    }
    if($dataA > $dataB){
        echo "A data a  é maior que a b <br>";
    }
    if($dataA == $dataC){ //n consegue pela pequena diferença no tempo de execução
        echo "A data A e a data C são iguais <br>";//só vai servir para as determinasdas pela gente
    }



?>