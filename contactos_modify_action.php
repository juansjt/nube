<?php
Include_once("system.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$result = MySQLQuery("Update contactos Set " . "nombre = " . "'" . $nombre . "'" . ", " . "telefono = " . $telefono . " where id = " . $id . ";");

header("Location: index.php");

?>
