<?php

    $host ="localhost";
    $user="root";
    $pass="R71n53lz/";
    $bd="cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    $q = "SELECT * FROM itens";

    $result = $conn->query($q);

    $conn->close();

    //Retorna 1 resultado só o primeiro
    $item = $result->fetch_assoc();

    print_r($item);
    echo "<br>";

    //Todos os resultados

    $itens = $result->fetch_all();//como fetch assoc está sendo executado primeiro, o primeiro elemento n aparece nessa requisição
    print_r($itens);


