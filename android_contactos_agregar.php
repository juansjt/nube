<?php
Include_once("system.php");

$nombre = $_GET["nombre"];
$telefono = $_GET["telefono"];

//echo $nombre;//.','.$telefono;

$result = MySQLQuery("Insert into contactos (nombre, telefono) values ( '" . $nombre . "'," . $telefono . ");");

echo $result;

?>
