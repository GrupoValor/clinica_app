<?php

require_once '../../php-includes/connect.inc.php';

$usuario = $_GET['usu_id'];
$caso = $_GET['cas_id'];


$stmt = $db->prepare("INSERT INTO TA_USUARIO_CASO(usu_id, cas_id) VALUES (:usuario, :caso)");
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':caso', $caso);
$stmt->execute();

?>
