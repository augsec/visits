<?php
require("conn/conexao.php");


// Abrir conexão com o banco de dados SQLite
$db = new PDO("sqlite:$db_file");

// Contar o número de registros na tabela "visitors"

$count = $pdo->query("SELECT count(*) FROM visitors")->fetchColumn();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Visitas</title>
</head>
<body>
    <h1>Gerenciador de Visitas</h1>

    <h5 class="visitas">Total de visitas: <?php echo $count;?></h5>
    <input onclick="location.href='del_visitas.php';" type="submit" value="Resetar Visitas" />

    <input onclick="location.href='insert_visitas.php';" type="submit" value="Registrar Visita" />
        
        
</body>
</html>