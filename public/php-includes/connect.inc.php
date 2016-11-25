<?php
try {
	  $db = new PDO( 'mysql:host=murano.websitewelcome.com;dbname=cobarcom_clinicadb;charset=utf8', 'cobarcom_root', 'clinica' );
	//$db = new PDO( 'mysql:host=localhost;dbname=clinica;charset=utf8', 'root', '' );
}
catch(Exception $e) {
    echo "An error has occurred";
}
?>
