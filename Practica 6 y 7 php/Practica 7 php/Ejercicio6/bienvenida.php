<?php
session_start();

if (isset($_SESSION['nombre'])) {
    echo "<h2>Bienvenido " . $_SESSION['nombre'] . "</h2>";
    echo "<p>Nos alegra verte nuevamente.</p>";
    echo "<a href='cerrar.php'>Cerrar sesión</a>";
} else {
    echo "<h3>No puede visitar esta página sin iniciar sesión.</h3>";
    echo "<a href='formulario.html'>Ir al formulario</a>";
}
?>
