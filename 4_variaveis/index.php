<?php
    //podemos criar uma var por meio do nome de outra var

    $x = "nome";

    echo "$x <br>";

    $$x ="Matheus";//usa o valor da var x como nome da var q conterá mateus

    echo "$nome <br>";

    // VARIAVEL POR REFERÊNCIA
    //podemos criar uma variavel com refernecia a outra

    $z= 10;

    $y =& $z;//referenciação

    echo $z;
    echo"<br>";
    echo $y;

    $y =15; //referenciada alterada

    echo "<br>";
    echo "atribuição após referencia";
    echo "<br>";
    echo $z;
    echo"<br>";
    echo $y;

    $z=20; //referencia alterada

    echo "<br>";
    echo "atribuição após referencia";
    echo "<br>";
    echo $z;
    echo"<br>";
    echo $y;

    //não importa qual seja mudada as duas permanecerão iguais

?>