<?php
    //Arquivos que não existem
    // include_once "teste.php";

    //Arquivos que existem

    include_once "teste2.php";
    include_once "teste2.php";//n faz nada pq já incluiu uma vez

    //Arquivos que não existem
    //require_once "teste.php"; se fosse o teste2 não incluiria pq o include já incluiu

    //Arquivos que existem

    require_once "teste3.php";
    require_once "teste3.php";//não faz nada pq já foi incluido antes
?>

<p>Testando codigo</p>