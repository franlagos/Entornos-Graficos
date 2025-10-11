<?php
include("conexion.inc");
$vId = $_POST['id'];
$vSql = "SELECT * FROM Ciudades WHERE id=$vId";
$vResultado = mysqli_query($link, $vSql);

if (mysqli_num_rows($vResultado) == 0) {
    echo "Ciudad no encontrada.<br>";
    echo "<a href='FormModiIni.html'>Volver</a>";
} else {
    $fila = mysqli_fetch_array($vResultado);
?>
<form action="Modi.php" method="post">
  <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
  Ciudad: <input type="text" name="ciudad" value="<?php echo $fila['ciudad']; ?>"><br>
  País: <input type="text" name="pais" value="<?php echo $fila['pais']; ?>"><br>
  Habitantes: <input type="number" name="habitantes" value="<?php echo $fila['habitantes']; ?>"><br>
  Superficie: <input type="text" name="superficie" value="<?php echo $fila['superficie']; ?>"><br>
  Tiene Metro (1/0): <input type="text" name="tieneMetro" value="<?php echo $fila['tieneMetro']; ?>"><br>
  <input type="submit" value="Modificar">
</form>
<?php
}
mysqli_close($link);
?>
