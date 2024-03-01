<?php

    $host ="localhost";
    $user="root";
    $pass="R71n53lz/";
    $bd="cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    $nome= "Suporte de microfone";
    $descricao ="Feito na China";

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");//NOS VALUES sempre ? 

    //substituindo os ? ? com dados válidos
    $stmt->bind_param("ss",$nome, $descricao );//ss -> duas strings nome descr
    //s = string, i= int, d= duoble

    $stmt->execute();

    $conn->close();