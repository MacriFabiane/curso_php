<?php
    function velocidadeMaxima($vel){
        if(is_int($vel)){
            echo "O carro atinge a velocidade máxima de $vel Km/h <br>";
        }
        else{
            echo "Por favor, passe um número inteiro <br>";
        }
    }

    velocidadeMaxima(200);

    //PHP ignora parâmetro desnescessário
    velocidadeMaxima(250, "teste");

    velocidadeMaxima("teste")
?>