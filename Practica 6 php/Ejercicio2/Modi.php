<?php
include("conexion.inc");

$vId = $_POST['id'];
$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabit = $_POST['habitantes'];
$vSup = $_POST['superficie'];
$vMetro = $_POST['tieneMetro'];

$vSql = "UPDATE Ciudades SET ciudad='$vCiudad', pais='$vPais',
         habitantes=$vHabit, superficie=$vSup, tieneMetro=$vMetro WHERE id=$vId";

mysqli_query($link, $vSql) or die (mysqli_error($link));
echo "Ciudad modificada correctamente.<br>";
echo "<a href='menu.html'>Volver al menú</a>";

mysqli_close($link);
?>
