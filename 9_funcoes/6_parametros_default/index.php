<?php
    function teste($a ="teste"){
        echo " o valor de a é: $a <br>";
    }

    teste();
    teste("macri");

    function testando ($b, $a="testando"){//boa pratica -> inserir os default por último

        echo "O valor de a é: $a e o valor de  b é: $b <br>";


    }

    testando("1");
    testando("1", 2);

?>