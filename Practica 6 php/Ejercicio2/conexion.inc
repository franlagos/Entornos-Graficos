<?php
$link = mysqli_connect("localhost", "root", "") or die ("Problemas de conexión");
mysqli_select_db($link, "Capitales") or die ("No se pudo conectar a la base Capitales");
?>