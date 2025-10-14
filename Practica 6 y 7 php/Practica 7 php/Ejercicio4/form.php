<?php

if (isset($_GET['delete_cookie'])) {
    setcookie("noticia", "", time() - (60 * 60 * 24 * 90)); 
    
    unset($_COOKIE["noticia"]);
    
    header("Location: form.php");
    exit;
}


if (isset($_POST["noticia"])) {
    $noticia_elegida = $_POST["noticia"];
    setcookie("noticia", $noticia_elegida, time() + (60 * 60 * 24 * 90));
    
    header("Location: form.php");
    exit;
}


if (isset($_COOKIE["noticia"])) {
    $noticia_actual = $_COOKIE["noticia"];
    
    if ($noticia_actual == "Noticia política") {
        echo '<h1>Noticia política</h1>';
    } elseif ($noticia_actual == "Noticia deportiva") {
        echo '<h1>Noticia deportiva</h1>';
    } elseif ($noticia_actual == "Noticia económica") {
        echo '<h1>Noticia económica</h1>';
    }
    
    echo '<p><a href="?delete_cookie=1">Borrar cookie y elegir otra noticia</a></p>';

} else {
    ?>
    <head>
        <title>Periódico</title>
    </head>
    <html>
    <body>
        <form action="" method="POST">
            <p>Elige tipo de noticia:</p>
            <input type="radio" id="politica" name="noticia" value="Noticia política">
            <label for="politica">Noticia política</label><br>

            <input type="radio" id="deportiva" name="noticia" value="Noticia deportiva">
            <label for="deportiva">Noticia deportiva</label><br>

            <input type="radio" id="economica" name="noticia" value="Noticia económica">
            <label for="economica">Noticia económica</label><br>
            <input type="submit" value="Enviar" name="boton">
        </form>
    </body>
    </html>
    <?php
}
?>