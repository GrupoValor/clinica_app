<?php
sleep(2);
require_once '../../php-includes/connect.inc.php';

$aler_titulo = $_GET['titulo'];
$aler_cx = $_GET['cx'];
$aler_cy = $_GET['cy'];
$cas_id = $_GET['cas_id'];

$stmt = $db->prepare("INSERT INTO TA_ALERTA(ale_titulo, ale_cx, ale_cy, ale_estado, cas_id) VALUES(:aler_titulo,:aler_cx,:aler_cy,'registrada',:cas_id)");
$stmt->bindParam(':aler_titulo', $aler_titulo);
$stmt->bindParam(':aler_cx', $aler_cx);
$stmt->bindParam(':aler_cy', $aler_cy);
$stmt->bindParam(':cas_id', $cas_id);
$stmt->execute();

?>
