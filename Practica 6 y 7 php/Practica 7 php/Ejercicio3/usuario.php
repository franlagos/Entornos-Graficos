<?php
if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    setcookie("nombre", $nombre, time() + (60 * 60 * 24 * 90));
    echo '"Hola ' . $_COOKIE["nombre"];
}