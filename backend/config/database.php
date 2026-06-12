<?php
    // backend/config/database.php

    // Puxa as variáveis do $_ENV. Se não existirem, usa os valores padrão (fallback)
    // $host = $_ENV['DB_HOST'] ?? 'localhost';
    // $db   = $_ENV['DB_NAME'] ?? 'roprepo_db';
    // $user = $_ENV['DB_USER'] ?? 'root';
    // $pass = $_ENV['DB_PASS'] ?? ''; 

    // try {
    //     // Configura a conexão PDO com suporte a caracteres UTF-8 modernos
    //     $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
        
    //     $options = [
    //         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Dispara exceções em caso de erros SQL
    //         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Retorna os dados do banco como arrays associativos
    //         PDO::ATTR_EMULATE_PREPARES   => false,                  // Usa prepare statements nativos para segurança contra SQL Injection
    //     ];

    //     // Instancia a conexão globalmente na variável $pdo
    //     $pdo = new PDO($dsn, $user, $pass, $options);

    // } catch (PDOException $e) {
    //     // Em ambiente de desenvolvimento local, exibe o erro na tela. Em produção, mude para uma mensagem genérica.
    //     http_response_code(500);
    //     die("Database connection failed: " . $e->getMessage());
    //}
?>