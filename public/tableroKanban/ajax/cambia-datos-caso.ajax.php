<?php
require_once '../../php-includes/connect.inc.php';
$nombre = $_GET['nombre-detalle-tarea'];
$descripcion = $_GET['descripcion-detalle-tarea'];
$id = $_GET['tar_id'];

$stmt = $db->prepare("UPDATE TA_TAREA SET tar_nombre = :nombre , tar_descri=:descripcion WHERE tar_id =:id");
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':descripcion',$descripcion);
$stmt->bindParam(':id',$id);
$stmt->execute();
?>
