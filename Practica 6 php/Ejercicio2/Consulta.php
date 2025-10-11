<?php
include("conexion.inc");
$vSql = "SELECT * FROM Ciudades";
$vResultado = mysqli_query($link, $vSql);
?>
<table border="1">
<tr>
  <th>ID</th><th>Ciudad</th><th>País</th><th>Habitantes</th><th>Superficie</th><th>Tiene Metro</th>
</tr>
<?php while ($fila = mysqli_fetch_array($vResultado)) { ?>
<tr>
  <td><?php echo $fila['id']; ?></td>
  <td><?php echo $fila['ciudad']; ?></td>
  <td><?php echo $fila['pais']; ?></td>
  <td><?php echo $fila['habitantes']; ?></td>
  <td><?php echo $fila['superficie']; ?></td>
  <td><?php echo $fila['tieneMetro']; ?></td>
</tr>
<?php } ?>
</table>
<a href="menu.html">Volver al menú</a>
<?php
mysqli_close($link);
?>
