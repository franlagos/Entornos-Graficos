<?php
include("conexion.inc");

$busqueda = trim($_POST['cancion']);

if ($busqueda == "") {
    echo "Por favor, escriba algo para buscar.";
    exit;
}

// Uso LIKE para que encuentre coincidencias y no solo busque exactamente lo escrito por el usuario
$vSql = "SELECT * FROM buscador WHERE canciones LIKE '%$busqueda%'";
$vResultado = mysqli_query($link, $vSql) or die("Error en la consulta: " . mysqli_error($link));

if (mysqli_num_rows($vResultado) == 0) {
    echo "<h3>No se encontraron canciones que coincidan con: <i>$busqueda</i></h3>";
} else {
    echo "<h3>Canciones encontradas:</h3>";
    echo "<ul>";
    while ($fila = mysqli_fetch_assoc($vResultado)) {
        echo "<li>" . $fila['canciones'] . "</li>";
    }
    echo "</ul>";
}

mysqli_free_result($vResultado);
mysqli_close($link);

echo "<br><a href='buscador.html'>Volver al buscador</a>";
?>
