<?php
sleep(2);
require_once '../../php-includes/connect.inc.php';

$aler_titulo = $_GET['titulo'];
$aler_cx = $_GET['cx'];
$aler_cy = $_GET['cy'];
$cas_id = $_GET['cas_id'];
$direccion = $_GET['direccion'];
$descripcion = $_GET['descripcion'];
$incentivos = $_GET['incentivos'];

$stmt = $db->prepare("INSERT INTO TA_ALERTA(ale_titulo, ale_cx, ale_cy, ale_estado, cas_id, ale_descrip, ale_fecreg, ale_incentivo, ale_direccion)
 VALUES(:aler_titulo,:aler_cx,:aler_cy,'registrada',:cas_id,:descripcion, current_date, :incentivos, :direccion)");
$stmt->bindParam(':aler_titulo', $aler_titulo);
$stmt->bindParam(':aler_cx', $aler_cx);
$stmt->bindParam(':aler_cy', $aler_cy);
$stmt->bindParam(':cas_id', $cas_id);
$stmt->bindParam(':descripcion', $descripcion);
$stmt->bindParam(':incentivos', $incentivos);
$stmt->bindParam(':direccion', $direccion);
$stmt->execute();

?>
