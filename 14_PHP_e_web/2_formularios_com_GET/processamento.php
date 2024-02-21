<?php
    print_r($_GET);//imprime tudo q foi pego no get

    if(isset($_GET['nome'])){//se está setada
        $nome = $_GET['nome'];
        $idade =$_GET['idade'];
    }else{
        $nome="Padrão";
        $idade="Padrão";
    }
?>

<h1> O seu nome é <?=$nome?>, e sua idade é <?= $idade?> </h1>