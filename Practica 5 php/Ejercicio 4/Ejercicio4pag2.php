<?php
session_start(); 
if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 0;
}
$_SESSION["contador"]++;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página 2</title>
</head>
<body>
    <h1>Página 2</h1>
    <p>Has visitado <strong><?php echo $_SESSION["contador"]; ?></strong> páginas durante esta sesión.</p>
    <a href="Ejercicio4pag1.php">Volver a la página 1</a>
</body>
</html>