<?php

require_once '../php-includes/connect.inc.php';

$tar_id = $_GET['tar_id'];

$arreglo_comentarios = [];

$stmt = $db->query("SELECT com_mensaj FROM cobarcom_clinicadb.TA_COMENTARIO WHERE tar_id = $tar_id");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $arreglo_comentarios[] = $row['com_mensaj'];
}

echo $arreglo_comentarios;

?>
