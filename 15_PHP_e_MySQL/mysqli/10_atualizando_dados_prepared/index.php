<?php

    $host ="localhost";
    $user="root";
    $pass="R71n53lz/";
    $bd="cursophp";

    try {
        $conn = new mysqli($host, $user, $pass, $bd);
    
        // ASSUNTO DA AULA
        $id = 11;
    
        $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
    
        $nome = "Sofá";
        $descricao = "Sofá semi novo, com madeira de demolição";
    
        // Simular erro: usar uma string de definição de tipo incorreta
        $result1 =$stmt->bind_param("ssia", $nome, $descricao, $id);  // Use "ss" ao invés de "ssi"
    
          // Executar a consulta e verificar o resultado
        $result = $stmt->execute();
    
        if (!$result || !$result1) {
            throw new Exception("Erro durante a execução da consulta: " . $stmt->error);
        } else {
            echo "Atualização realizada com sucesso!";
        }
    
        $conn->close();
    } catch (Exception $e) {
        echo "Erro capturado: " . $e->getMessage();
    }