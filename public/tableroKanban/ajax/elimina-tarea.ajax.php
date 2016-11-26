<?php

require_once '../../php-includes/connect.inc.php';

$id = $_GET['tar_id'];


$stmt = $db->query("DELETE FROM TA_COMENTARIO WHERE tar_id = $id");
$stmt = $db->query("DELETE FROM TA_TAREA WHERE tar_id = $id");

?>
