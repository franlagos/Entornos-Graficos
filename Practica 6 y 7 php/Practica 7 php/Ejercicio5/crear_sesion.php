
<?php
session_start(); 


$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$_SESSION['usuario'] = $usuario;
$_SESSION['clave'] = $clave;

echo "<h2>Sesión iniciada</h2>";
echo "Se guardaron las variables de sesión.<br><br>";
echo "<a href='mostrar_sesion.php'>Ir a la página de muestra</a>";
?>
