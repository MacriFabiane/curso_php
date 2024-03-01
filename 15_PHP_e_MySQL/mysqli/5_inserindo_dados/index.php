<?php

    $host ="localhost";
    $user="root";
    $pass="R71n53lz/";
    $bd="cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    $table = "itens";
    $nome = "xícara";
    $descricao = "xicara usada pela Penélope Charmosa";

    $q= "INSERT INTO $table (nome, descricao) VALUES ('$nome', '$descricao')"; //dados sendo inseridos sempre com ''

    $conn->query($q);

    $conn->close();