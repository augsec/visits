<?php

require("conn/conexao.php");

// Obter o endereço IP do visitante
$ip = $_SERVER['REMOTE_ADDR'];

// Obter a data e hora atuais
$date = date('Y-m-d');
$time = date('H:i:s');

$db = new PDO("sqlite:$db_file");

// Inserir uma nova linha na tabela "visitors"
$query = "INSERT INTO visitors (ip, date, time) VALUES (:ip, :date, :time)";
$stmt = $db->prepare($query);
$stmt->bindParam(':ip', $ip);
$stmt->bindParam(':date', $date);
$stmt->bindParam(':time', $time);
$stmt->execute();

$datetime = $date." | "."$time";

echo "<script>
window.location.href='visitas.php';
alert('Visita inserida! ".$ip." | " .$datetime."');
</script>";
?>