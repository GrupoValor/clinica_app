<?php

require_once '../php-includes/connect.inc.php';


$stmt = $db->query("SELECT * FROM cobarcom_clinicadb.TA_COMENTARIO");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<pre>'; print_r($row); echo '</pre>';
}

?>
