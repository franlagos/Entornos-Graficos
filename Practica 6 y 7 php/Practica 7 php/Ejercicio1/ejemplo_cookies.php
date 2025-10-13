<?php
// Ejemplo de uso de cookies en PHP para almacenar la hoja de estilos elegida por el usuario.
if (isset($_POST["estilo"])) {
    // Guardo el estilo recibido en una cookie que durará 90 días
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90)); // 90 días
} else {
    if (isset($_COOKIE["estilo"])) {
        $estilo = $_COOKIE["estilo"];
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Cookies en PHP</title>

    <?php
    if (isset($estilo)) {
        echo '<link rel="stylesheet" type="text/css" href="' . $estilo . '.css">';
    }
    ?>
</head>

<body>
    <h1>Ejemplo de uso de cookies</h1>
    <p>
        Este ejemplo muestra cómo almacenar en una cookie el nombre de la hoja de estilos CSS
        que queremos utilizar para definir el aspecto de la página.
    </p>

    <form action="ejemplo_cookies.php" method="post">
        <label for="estilo">Selecciona el estilo que prefieres:</label><br>

        <select name="estilo" id="estilo">
            <option value="verde">Verde</option>
            <option value="rosa">Rosa</option>
            <option value="negro">Negro</option>
        </select>

        <input type="submit" value="Guardar estilo">
    </form>

    <p>
        Recarga la página para comprobar que se mantiene el estilo elegido.
        <br>
        (La cookie dura 90 días).
    </p>
</body>
</html>
