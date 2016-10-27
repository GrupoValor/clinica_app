<?php

require_once '../php-includes/connect.inc.php';


$stmt = $db->query("SELECT tar_descri FROM cobarcom_clinicadb.TA_TAREA WHERE tar_id=23");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<pre>'; print_r($row); echo '</pre>';
}

?>
