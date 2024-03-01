<?php

    $host ="localhost";
    $user="root";
    $pass="R71n53lz/";
    $bd="cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    $id =5;
    $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $result =$stmt->get_result();

    $item = $result->fetch_row();//se n tiver o wher e o bindparam retornara a primeira linha da tabela

    print_r($item);

    $conn->close();


