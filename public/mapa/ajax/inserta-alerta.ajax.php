<?php
sleep(2);
require_once '../php-includes/connect.inc.php';

$aler_titulo = $_GET['titulo'];
$aler_cx = $_GET['cx'];
$aler_cy = $_GET['cy'];

$stmt = $db->prepare("INSERT INTO ta_alerta(ale_titulo, ale_cx, ale_cy, ale_estado) VALUES(:aler_titulo,:aler_cx,:aler_cy,'registrada')");
$stmt->bindParam(':aler_titulo', $aler_titulo);
$stmt->bindParam(':aler_cx', $aler_cx);
$stmt->bindParam(':aler_cy', $aler_cy);
$stmt->execute();

?>
