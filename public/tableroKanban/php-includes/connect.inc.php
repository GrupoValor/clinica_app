<?php
try {
  // $db = new PDO( 'mysql:host=murano.websitewelcome.com;dbname=cobarcom_clinicadb;charset=utf8', 'cobarcom_root', 'clinica' );

$db = new PDO( 'mysql:host=localhost;dbname=CLINICADB;charset=utf8', 'root', 'root' );
}
catch(Exception $e) {
    echo "An error has occurred";
}
?>
