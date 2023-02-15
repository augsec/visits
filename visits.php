<?php
require("conn/connection.php");


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
    <title>Visitors</title>
</head>
<body>
    <h1>Visitors</h1>

    <h5 class="visitas">Visitors: <?php echo $count;?></h5>
    <input onclick="location.href='del_visits.php';" type="submit" value="Reset All" />

    <input onclick="location.href='insert_visits.php';" type="submit" value="Register Visit" />
        
        
</body>
</html>