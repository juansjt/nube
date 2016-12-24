<?php

Include_once("system.php");

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];

$result = MySQLQuery("Insert into contactos(nombre, telefono) values (" . "'" . $nombre . "'" . ", " . $telefono . ");");

header("Location: index.php");

?>
