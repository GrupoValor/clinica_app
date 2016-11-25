<?php

require_once '../php-includes/connect.inc.php';

$id = $_GET['id'];

$stmt = $db->query("DELETE FROM TA_COMENTARIO WHERE com_id = :id");
$stmt->bindParam(':id',$id);
?>
