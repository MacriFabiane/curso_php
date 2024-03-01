<?php

    $host ="localhost";
    $user="root";
    $pass="R71n53lz/";
    $bd="cursophp";

    //MODO 1 com php 8

    //mysqli_report(MYSQLI_REPORT_OFF);//você está desativando os relatórios de erros do MySQLi pra n dar fatal error e n rodar a parte de baixo

    // $conn = new mysqli($host, $user, $pass, $bd);
   
    // if($conn->connect_errno){
    //     echo "Erro na conexao <br>";
    //     echo "Erro: " . $conn->connect_error ;
    // }

    //MODO 2

    try {
        $conn = new mysqli($host, $user, $pass, $bd);
        if (!$conn->connect_errno) {
            echo "<br><br> Conexão bem sucedida.<br>";
        }
    } catch (Exception $e) {
        echo "Erro na conexao <br>";
        echo "Erro: " . mysqli_connect_error();
        echo "<br><br>Erro de conexão: " . $e->getMessage();
    }

?>