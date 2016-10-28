<?php

require_once '../php-includes/connect.inc.php';

$id_estado = $_GET['id_estado'];
$cas_id = $_GET['cas_id'];


$stmt = $db->prepare("UPDATE TA_CASO SET estcas_id = :id_estado WHERE cas_id = $cas_id");
$stmt->bindParam(':id_estado', $id_estado);
$stmt->execute();

$stmt = $db->query("SELECT ESTADO.estcas_detalle FROM TA_CASO CASO, TA_ESTADOCASO ESTADO WHERE CASO.estcas_id = ESTADO.estcas_id AND CASO.cas_id = $cas_id");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo '<h4>'. $row['estcas_detalle'].'</h4>';
?>
