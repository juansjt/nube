<?php
Include_once("system.php");

$result = MySQLQuery("SELECT id, nombre, telefono from contactos;");

$json = array();
 
if(mysql_num_rows($result)){
	while($row = mysql_fetch_row($result)){ 
		$json[] = $row; 
	} 
}

echo json_encode($json); 
?>