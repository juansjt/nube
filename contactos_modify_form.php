<html>
<body>
<b>Modificación de elemento de contactos</b><br><br>

<form method="post" action="contactos_modify_action.php">
 <table>
<?php
Include_once("system.php");

$id = $_GET["id"];
$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("agenda", $conexion);

$result = MySQLQuery("SELECT id, nombre, telefono from contactos where id= " . $id . ";");
while($row = mysql_fetch_array($result,MYSQL_NUM)) {
echo "<tr>";
echo   "<td>id</td>";
echo   "<td><input type=\"number\" value=\"" . $row[0] . "\" name=\"id\" id=\"id\" placeholder=\"id\" readonly></td>";
echo "</tr>";
echo "<tr>";
echo   "<td>nombre</td>";
echo   "<td><input type=\"text\" value=\"" . $row[1] . "\" name=\"nombre\" id=\"nombre\" placeholder=\"nombre\"/></td>";
echo "</tr>";
echo "<tr>";
echo   "<td>telefono</td>";
echo   "<td><input type=\"number\" value=\"" . $row[2] . "\" name=\"telefono\" id=\"telefono\" placeholder=\"telefono\" required /></td>";
echo "</tr>";
}
?>

 <tr>
   <td><input type="submit" value="submit!" class="special" /></td>
 </tr>
 </table>
</form>
<br> <i>Por CEJT</i>
</body>
</html> 
