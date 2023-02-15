<?php
// Configurações do banco de dados
require("conn/connection.php");
$table_name = "visitors";

// Cria a conexão com o banco de dados
try {
    $pdo = new PDO("sqlite:$db_file");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error while connecting database: " . $e->getMessage());
}

// Prepara a consulta SQL para excluir todos os registros
$sql = "DELETE FROM {$table_name}";

// Executa a consulta SQL
try {
    $pdo->exec($sql);
    echo "<script>
window.location.href='visits.php';
alert('All visits have been cleared');
</script>";
} catch (PDOException $e) {
    die("Error! {$table_name}: " . $e->getMessage());
}

// Fecha a conexão com o banco de dados
$pdo = null;
?>