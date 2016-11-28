<?php
header('content-type: application/json; charset=utf-8');

require_once '../../php-includes/connect.inc.php';

$caso = $_GET['cas_id'];

$r = array();

$stmt = $db->query("SELECT * FROM TA_ALERTA WHERE cas_id = $caso");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $r[] = $row;
}

echo json_encode($r);

?>
