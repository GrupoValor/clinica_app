<?php

require_once '../php-includes/connect.inc.php';

$id = $_GET['id'];
$estado = $_GET['estado'];

$stmt = $db->prepare("UPDATE cobarcom_clinicadb.TA_TAREA SET tar_estado = :estado WHERE tar_id = :id");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':estado', $estado);
$stmt->execute()

?>
