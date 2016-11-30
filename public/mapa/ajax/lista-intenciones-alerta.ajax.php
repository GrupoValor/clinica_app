<?php
require_once '../../php-includes/connect.inc.php';

$output = '';

$stmt = $db->query("SELECT * FROM TA_ALERTA_ATENCION WHERE ale_id = ".$_GET['ale_id']."");


if($stmt){
    $output .= '<h4 align="center">Lista:</h4>';
    $output .= '<div class="table-responsive">
                        <table class="table table bordered">
                             <tr>
                                  <th>Alerta id</th>
                                  <th>Nombre</th>
                                  <th>Correo</th>
                                  <th>Telefono</th>
                                  <th>Mensaje</th>
                             </tr>';
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                             {
                                  $output .= '
                                       <tr class="fila-intencion">
                                            <td>'.$row["ale_id"].'</td>
                                            <td>'.$row["nombre"].'</td>
                                            <td>'.$row["correo"].'</td>
                                            <td>'.$row["telefono"].'</td>
                                            <td>'.$row["mensaje"].'</td>
                                       </tr>
                                  ';
                             }
                             echo $output;
} else
 {
      echo 'No hay intenciones de atención';
 }

?>
