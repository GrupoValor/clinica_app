<?php

require_once '../php-includes/connect.inc.php';

$id = $_GET['tar_id'];


$output = '';
$stmt = $db->query("SELECT * FROM cobarcom_clinicadb.TA_COMENTARIO WHERE tar_id = $id");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $output .= '<li class="comentario" id="' . $row['com_id'] . '"> super_user escribio:' . $row['com_mensaj'] . '</li>';
}

echo '<ul id="lista-comentarios">'. $output .'</ul>';

?>
