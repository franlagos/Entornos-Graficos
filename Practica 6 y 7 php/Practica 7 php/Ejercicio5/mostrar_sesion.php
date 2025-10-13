<?php
session_start(); 

if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
    echo "<h2>Datos del cliente</h2>";
    echo "Usuario: " . $_SESSION['usuario'] . "<br>";
    echo "Clave: " . $_SESSION['clave'] . "<br>";
} else {
    echo "No hay variables de sesión definidas.";
}
?>
