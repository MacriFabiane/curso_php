<?php

    $host ="localhost";
    $user="root";
    $pass="R71n53lz/";
    $bd="cursophp";

    $conn= new mysqli($host, $user, $pass, $bd);

    //criando

   // $q= "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

   //dropando
    $q= "DROP TABLE teste";

    $conn->query($q);//sempre serão as mesmas querys que no priprio sql só rodadas pelo metodo query

    $conn->close();

