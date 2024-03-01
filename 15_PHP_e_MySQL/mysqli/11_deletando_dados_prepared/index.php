<?php

    $host ="localhost";
    $user="root";
    $pass="R71n53lz/";
    $bd="cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    $nome = "microfone";
    $stmt = $conn->prepare("DELETE FROM itens WHERE nome =?");

    $stmt->bind_param("s", $nome);

    $stmt->execute();

    $conn->close();
