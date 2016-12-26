<?php
Include_once("system.php");

$id = $_GET["id"];
$result = MySQLQuery("Delete From contactos Where id = " . $id);

echo $result;

?>
