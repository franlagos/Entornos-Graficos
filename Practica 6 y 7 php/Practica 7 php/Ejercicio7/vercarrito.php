<?php
session_start();
$carro = isset($_SESSION['carro']) ? $_SESSION['carro'] : false;
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Carrito</title>
<style>
body { font-family: Arial; background-color: #f8f8f8; }
table { border-collapse: collapse; width: 70%; margin: auto; background: white; }
th, td { border: 1px solid #ccc; padding: 8px; text-align: center; }
th { background-color: #ddd; }
</style>
</head>
<body>
<h2 align="center">🧾 Carrito de Compras</h2>
<?php if ($carro) { ?>
<table>
<tr><th>Producto</th><th>Precio</th><th>Cantidad</th><th>Subtotal</th><th>Acción</th></tr>
<?php
$total = 0;
foreach ($carro as $v) {
    $subtotal = $v['cantidad'] * $v['precio'];
    $total += $subtotal;
    echo "<tr>
            <td>{$v['producto']}</td>
            <td>\${$v['precio']}</td>
            <td>{$v['cantidad']}</td>
            <td>\$" . number_format($subtotal, 2) . "</td>
            <td><a href='borrarcar.php?id={$v['id']}'>❌</a></td>
          </tr>";
}
?>
</table>
<p align="center"><b>Total: $<?php echo number_format($total, 2); ?></b></p>
<p align="center"><a href="catalogo.php">⬅️ Seguir comprando</a></p>
<?php } else { ?>
<p align="center">No hay productos en el carrito.</p>
<p align="center"><a href="catalogo.php">Volver al catálogo</a></p>
<?php } ?>
</body>
</html>
