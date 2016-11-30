<?php

require_once '../php-includes/connect.inc.php';

$id_alerta = $_GET['id_alerta'];
$nombre = $_GET['nombre'];
$correo = $_GET['correo'];
$telefono = $_GET['telefono'];
$mensaje = $_GET['mensaje'];


$stmt = $db->prepare("INSERT INTO TA_ALERTA_ATENCION(ale_id, nombre, correo, telefono, mensaje) VALUES (:id_alerta, :nombre, :correo, :telefono, :mensaje)");
$stmt->bindParam(':id_alerta', $id_alerta);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':correo', $correo);
$stmt->bindParam(':telefono', $telefono);
$stmt->bindParam(':mensaje', $mensaje);
$stmt->execute();

?>
