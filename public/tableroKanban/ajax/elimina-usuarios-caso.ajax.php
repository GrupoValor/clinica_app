<?php

require_once '../../php-includes/connect.inc.php';

$usuario = $_GET['usu_id'];
$caso = $_GET['cas_id'];

$stmt = $db->query("DELETE FROM TA_USUARIO_CASO WHERE usu_id = $usuario AND cas_id = $caso");

?>
