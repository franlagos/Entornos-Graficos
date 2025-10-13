<?php
session_start();
include("conexion.inc");

$mail = $_POST['mail'];

// Consulta para buscar el mail en la tabla alumnos
$vSql = "SELECT nombre FROM alumnos WHERE mail='$mail'";
$vResultado = mysqli_query($link, $vSql) or die("Error en la consulta: " . mysqli_error($link));

// Usamos mysqli_fetch_assoc() para obtener una fila (si existe)
$fila = mysqli_fetch_assoc($vResultado);

if ($fila) {
    // Si hay resultados, guardamos el nombre en la sesión
    $_SESSION['nombre'] = $fila['nombre'];

    echo "<h2>Bienvenido, " . $_SESSION['nombre'] . "!</h2>";
    echo "<p>Tu mail fue encontrado en la base de datos.</p>";
    echo "<a href='bienvenida.php'>Ir a la página de bienvenida</a>";
} else {
    // Si no hay resultados
    echo "<h3>El mail ingresado no existe en la base de datos.</h3>";
    echo "<a href='formulario.html'>Volver al formulario</a>";
}

// Cerramos conexión
mysqli_free_result($vResultado);
mysqli_close($link);
?>
