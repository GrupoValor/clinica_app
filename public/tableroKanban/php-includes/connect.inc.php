<?php
try {
    $db = new PDO( 'mysql:host=localhost;dbname=prueba;charset=utf8', 'root', '' );
}
catch(Exception $e) {
    echo "An error has occurred";
}
?>
