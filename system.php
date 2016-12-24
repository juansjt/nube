<?php

function MySQLQuery($query){
$conexion = mysql_connect("localhost", "root", ""); // url, user, pass
mysql_select_db("agenda", $conexion);
$result = mysql_query($query, $conexion);
mysql_close($conexion);
return $result;
}

?>