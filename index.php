<html>
<body>
<b>CRUD de contactos</b><br><br>

<a href="contactos_create_form.php">Crear elemento</a><br><br>

<?php
Include_once("system.php");

$result = MySQLQuery("SELECT id, nombre, telefono from contactos;");
echo "<table border='1'>
<tr>
    <th>nombre</th>
    <th>telefono</th>
    <th>Acciones</th>
</tr>";

while($row = mysql_fetch_array($result,MYSQL_NUM)) {
echo "<tr>";
echo "<td>" . $row[1] ."</td>";
echo "<td>" . $row[2] ."</td>";
echo "<td>" . "<a href=\"contactos_modify_form.php?id=" . $row[0] . "\"> modificar </a>" . "|" . "<a href=\"contactos_delete.php?id=" . $row[0] . "\"> eliminar </a></td>";
echo "</tr>";
}

echo "</table>";
?>
<br> <i>Por CEJT</i></body>
</html> 
