<?php

require_once '../../php-includes/connect.inc.php';

$usuario = $_GET['usu_id'];
$caso = $_GET['cas_id'];
$descripcion = $_GET['act_desc'];


$stmt = $db->prepare("INSERT INTO TA_ACTIVIDAD(usu_id, cas_id, act_desc,act_fecreg) VALUES (:usuario, :caso, :descripcion,NOW())");
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':caso', $caso);
$stmt->bindParam(':descripcion', $descripcion);
$stmt->execute();

?>
