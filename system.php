<?php

function MySQLQuery($query){
$conexion = mysql_connect(getenv("OPENSHIFT_MYSQL_DB_HOST"), getenv("OPENSHIFT_MYSQL_DB_USERNAME"), getenv("OPENSHIFT_MYSQL_DB_PASSWORD"));
mysql_select_db("agenda", $conexion);
$result = mysql_query($query, $conexion);
mysql_close($conexion);
return $result;
}

?>
