<?php
    $host ="localhost";
    $user="root";
    $pass="R71nf53lz/";
    $bd="cursophp";

    $conn = new mysqli($host, $user, $pass, $bd);

    $sql = "SELECT * FROM itens";

    $result =$conn->query($sql);

    print_r($result);

    $conn->close();//fechar sempre a conexao depois de usá-la
   

