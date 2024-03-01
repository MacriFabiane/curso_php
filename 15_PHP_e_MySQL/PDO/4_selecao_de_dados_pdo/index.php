<?php

    $host = "localhost";
    $db="cursophp";
    $user = "macri";
    $pass="123";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $id =5;

    $stmt =$conn->prepare("SELECT * FROM itens WHERE id> :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    //só um dado
    // $data =$stmt->fetch(PDO::FETCH_ASSOC);//fetch assoc é pra n repetir cada coluna 2 vezes

    // print_r($data);

    //todos os dados
    $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($itens);