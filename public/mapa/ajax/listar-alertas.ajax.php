<?php
header('content-type: application/json; charset=utf-8');

require_once '../../php-includes/connect.inc.php';

$r = array();

$stmt = $db->query("SELECT * FROM TA_ALERTA");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $r[] = $row;
}

echo json_encode($r);

?>
