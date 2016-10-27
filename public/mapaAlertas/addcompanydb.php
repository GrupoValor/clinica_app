<?php

require_once("db.php");

$company = strip_tags($_POST['company']);
$details = strip_tags($_POST['details']);
$latitude = strip_tags($_POST['latitude']);
$longitude = strip_tags($_POST['longitude']);
$telephone = strip_tags($_POST['telephone']);

connectToDB::addCompany($company, $details, $latitude, $longitude, $telephone);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Documento agregado</title>
 </head>
 <body>
  <h1>La alerta fue agragada</h1>
 </body>
</html>