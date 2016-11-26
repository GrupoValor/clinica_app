<?php

require_once '../../php-includes/connect.inc.php';

$id = $_GET['id'];

$stmt = $db->query("SELECT tar_descri FROM TA_TAREA WHERE tar_id = $id");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo $row['tar_descri'];

?>
