<?php

require_once '../../php-includes/connect.inc.php';

$tar_id = $_GET['tar_id'];
$com_mensaje = $_GET['com_mensaje'];


$stmt = $db->prepare("INSERT INTO TA_COMENTARIO(tar_id,com_mensaj,usu_id) VALUES (:tar_id, :com_mensaje,1)");
$stmt->bindParam(':tar_id', $tar_id);
$stmt->bindParam(':com_mensaje', $com_mensaje);
$stmt->execute();

$stmt = $db->query("SELECT com_id FROM TA_COMENTARIO ORDER BY 1 DESC LIMIT 1");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo $row['com_id'];
?>
