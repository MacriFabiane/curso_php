<?php

    $host = "localhost";
    $db="cursophp";
    $user = "macri";
    $pass="123";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $stmt =$conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

    $nome= "Suporte de monitor";
    $descricao = "Suporte novo, ainda na caixa";

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();

    