<?php
date_default_timezone_set('America/Sao_Paulo');


// nome do arquivo de banco de dados SQLite
$db_file = 'conn/database.sqlite';

// cria a conexão com o banco de dados usando PDO
$pdo = new PDO("sqlite:$db_file");

// cria a tabela "visitors" se ela ainda não existir
$query = "CREATE TABLE IF NOT EXISTS visitors (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            ip TEXT,
            date TEXT,
            time TEXT
        )";
$pdo->exec($query);


?>