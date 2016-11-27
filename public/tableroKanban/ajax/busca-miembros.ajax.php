<?php
require_once '../../php-includes/connect.inc.php';

$output = '';
$stmt = $db->query("SELECT * FROM TA_USUARIO WHERE usu_usenam LIKE '%".$_GET["search"]."%'");
if($stmt){
    $output .= '<h4 align="center">Resultados de búsqueda</h4>';
    $output .= '<div class="table-responsive">
                        <table class="table table bordered">
                             <tr>
                                  <th>usu_id</th>
                                  <th>rol_id</th>
                                  <th>usu_name</th>
                             </tr>';
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                             {
                                  $output .= '
                                       <tr>
                                            <td>'.$row["usu_id"].'</td>
                                            <td>'.$row["rol_id"].'</td>
                                            <td>'.$row["usu_usenam"].'</td>
                                       </tr>
                                  ';
                             }
                             echo $output;
} else
 {
      echo 'Data no encontrada';
 }

?>
