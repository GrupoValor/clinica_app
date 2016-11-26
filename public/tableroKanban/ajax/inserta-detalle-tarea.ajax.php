<?php

require_once '../../php-includes/connect.inc.php';

$nombre = $_GET['titulo'];
$descripcion = $_GET['descripcion'];
$cas_id = $_GET['cas_id'];


$stmt = $db->prepare("INSERT INTO TA_TAREA(tar_estado,tar_nombre,tar_descri,cas_id,tar_fecreg) VALUES ('backlog', :nombre, :descripcion, :cas_id,current_date)");
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':descripcion', $descripcion);
$stmt->bindParam(':cas_id', $cas_id);
$stmt->execute();

$stmt = $db->query("SELECT tar_id FROM TA_TAREA ORDER BY 1 DESC LIMIT 1");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo $row['tar_id'];
?>
