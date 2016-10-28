<?php

require_once '../php-includes/connect.inc.php';

$id = $_GET['id'];

$stmt = $db->query("DELETE FROM TA_TAREA WHERE tar_id = $id");

?>
