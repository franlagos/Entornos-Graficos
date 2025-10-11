<?php
include("conexion.inc");

$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabit = $_POST['habitantes'];
$vSup = $_POST['superficie'];
$vMetro = $_POST['tieneMetro'];

$vSql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
         VALUES ('$vCiudad','$vPais',$vHabit,$vSup,$vMetro)";

mysqli_query($link, $vSql) or die (mysqli_error($link));

echo "La ciudad fue registrada correctamente.<br>";
echo "<a href='menu.html'>Volver al menú</a>";

mysqli_close($link);
?>
