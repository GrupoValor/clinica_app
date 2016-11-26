<?php

require_once '../../php-includes/connect.inc.php';


$stmt = $db->query("SELECT * FROM TA_ALERTA");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<pre>'; print_r($row); echo '</pre>';
}

?>
