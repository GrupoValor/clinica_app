<?php

require_once '../../php-includes/connect.inc.php';

$id_estado = $_GET['id_estado'];
$cas_id = $_GET['cas_id'];


$stmt = $db->prepare("UPDATE TA_CASO SET estcas_id = :id_estado WHERE cas_id = $cas_id");
$stmt->bindParam(':id_estado', $id_estado);
$stmt->execute();

$stmt = $db->query("SELECT ESTADO.estcas_detalle FROM TA_CASO CASO, TA_ESTADOCASO ESTADO WHERE CASO.estcas_id = ESTADO.estcas_id AND CASO.cas_id = $cas_id");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$script = "<script type='text/javascript'>
      $(document).ready(function(){
            $('#corpus').css('display', 'block');
            $('#addtarea').css('display', 'block');

          });
    </script>";
if( $row['estcas_detalle'] =="Cerrado" || $row['estcas_detalle'] =="En Abandono" || $row['estcas_detalle'] =="Inactivo" || $row['estcas_detalle'] =="Registrado"){
	$script = "<script type='text/javascript'>
      $(document).ready(function(){
            $('#corpus').css('display', 'none');
            $('#addtarea').css('display', 'none');
          });
    </script>";
}
echo '<h4 style="font-size: 15px; color: white;">'. $row['estcas_detalle'].'</h4>'.$script;

?>
