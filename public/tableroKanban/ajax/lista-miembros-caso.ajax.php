<?php
require_once '../../php-includes/connect.inc.php';

$output = '';

$stmt = $db->query("(SELECT TA_USUARIO.usu_id, TA_ROL.rol_nombre, TA_USUARIO.usu_usenam, TA_ALUMNO.alu_nombre
FROM TA_USUARIO, TA_ROL, TA_ALUMNO WHERE TA_USUARIO.rol_id = TA_ROL.rol_id AND
TA_USUARIO.usu_id = TA_ALUMNO.usu_id AND TA_ALUMNO.usu_id IN (SELECT usu_id FROM TA_USUARIO_CASO WHERE cas_id = ".$_GET['cas_id']."))
UNION
(SELECT TA_USUARIO.usu_id, TA_ROL.rol_nombre, TA_USUARIO.usu_usenam, TA_EVALUADOR.eva_nombre FROM
TA_USUARIO, TA_ROL, TA_EVALUADOR WHERE TA_USUARIO.rol_id = TA_ROL.rol_id AND
TA_USUARIO.usu_id = TA_EVALUADOR.usu_id AND TA_EVALUADOR.usu_id IN (SELECT usu_id FROM TA_USUARIO_CASO WHERE cas_id = ".$_GET['cas_id']."))");

$caso = $_GET['cas_id'];

$stmt2 = $db->query("select usu_id from TA_CASO where cas_id= $caso");
$row = $stmt2->fetch(PDO::FETCH_ASSOC);

$responsable = $row['usu_id'];




if($stmt){
    $output .= '<h4 align="center">Lista:</h4>';
    $output .= '<div class="table-responsive">
                        <table class="table table bordered">
                             <tr>
                                  <th>Usuario ID</th>
                                  <th>Rol</th>
                                  <th>Usuario</th>
                                  <th>Nombre</th>
                                  <th>Opcion</th>
                             </tr>';
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                             {
                                  $atrib = "";
                          
                                  if($responsable == $row["usu_id"]){
                                    $atrib = "disabled ";

                                  }
                                  $output .= '
                                       <tr class="fila-miembro" id="'.$row["usu_id"].'">
                                            <td>'.$row["usu_id"].'</td>
                                            <td>'.$row["rol_nombre"].'</td>
                                            <td>'.$row["usu_usenam"].'</td>
                                            <td>'.$row["alu_nombre"].'</td>
                                            <td><button type="button" '.$atrib.' id="'.$row["usu_id"].'" class="btn btn-danger btn-sm boton-elimina-miembro " data-dismiss="modal">Elimina</button> </td>
                                       </tr>
                                  ';
                             }
                             echo $output;
} else
 {
      echo 'Data no encontrada';
 }

?>
