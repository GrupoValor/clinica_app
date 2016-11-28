<?php

require_once '../../php-includes/connect.inc.php';

$id_alerta = $_GET['id_alerta'];
$estado = $_GET['estado'];


$stmt = $db->prepare("UPDATE TA_ALERTA SET ale_estado = :estado WHERE ale_id = $id_alerta");
$stmt->bindParam(':estado', $estado);
$stmt->execute();

?>
