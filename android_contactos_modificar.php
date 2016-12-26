<?php
Include_once("system.php");

$id = $_GET["id"];
$nombre = $_GET["nombre"];
$telefono = $_GET["telefono"];

$result = MySQLQuery("Update contactos Set " . "nombre = " . "'" . $nombre . "'" . ", " . "telefono = " . $telefono . " where id = " . $id . ";");

echo $result;

?>
