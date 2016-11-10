<?php
require_once '../php-includes/connect.inc.php';
$nombre = $_GET['nombre-detalle-tarea'];
$descripcion = $_GET['descripcion-detalle-tarea'];
$id = $_GET['id'];

$stmt = $db->prepare("UPDATE TA_TAREA SET tar_nombre = :id_nombre , tar_descri=:id_descrip WHERE tar_id = id_tarea");
$stmt->bindParam(':id_nombre', $nombre);
$stmt->bindParam(':id_descrip',$descripcion);
$stmt->bindParam('id_tarea',$id);
$stmt->execute();
