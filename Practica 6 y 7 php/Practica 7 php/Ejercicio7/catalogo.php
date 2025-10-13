<?php
session_start();
include("conexion.inc");

if (isset($_SESSION['carro']))
    $carro = $_SESSION['carro'];
else
    $carro = false;

$qry = mysqli_query($link, "SELECT * FROM catalogo ORDER BY producto ASC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Catálogo</title>
<style>
body { font-family: Arial; background-color: #f5f5f5; }
table { border-collapse: collapse; width: 50%; margin: auto; background: white; }
th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
th { background-color: #ddd; }
a { text-decoration: none; }
</style>
</head>
<body>
<h2 align="center">Catálogo de Productos</h2>
<table>
<tr><th>Producto</th><th>Precio</th><th>Acción</th></tr>

<?php while ($row = mysqli_fetch_assoc($qry)) { ?>
<tr>
<td><?php echo $row['producto']; ?></td>
<td>$<?php echo number_format($row['precio'], 2); ?></td>
<td>
<?php if (!$carro || !isset($carro[md5($row['id'])])) { ?>
  <a href="agregarcar.php?id=<?php echo $row['id']; ?>">🛒 Agregar</a>
<?php } else { ?>
  <a href="borrarcar.php?id=<?php echo $row['id']; ?>">❌ Quitar</a>
<?php } ?>
</td>
</tr>
<?php } ?>
</table>

<p align="center"><a href="vercarrito.php">🧾 Ver carrito</a></p>
</body>
</html>
