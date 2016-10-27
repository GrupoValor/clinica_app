<?php

require_once '../php-includes/connect.inc.php';

$nombre = $_GET['titulo'];
$descripcion = $_GET['descripcion'];

$stmt = $db->prepare("INSERT INTO ta_tarea(tar_estado,tar_nombre,tar_descri) VALUES ('backlog', :nombre, :descripcion)");
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':descripcion', $descripcion);
$stmt->execute();

$stmt = $db->query("SELECT tar_id FROM ta_tarea ORDER BY 1 DESC LIMIT 1");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo $row['tar_id'];
?>
