<?php
include("conexion.inc");
$vId = $_POST['id'];

$vSql = "DELETE FROM Ciudades WHERE id=$vId";
mysqli_query($link, $vSql) or die (mysqli_error($link));

echo "La ciudad fue eliminada correctamente.<br>";
echo "<a href='menu.html'>Volver al menú</a>";

mysqli_close($link);
?>
