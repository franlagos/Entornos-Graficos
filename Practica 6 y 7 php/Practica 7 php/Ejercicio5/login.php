<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h2>Ingreso de usuario</h2>
    <form action="crear_sesion.php" method="post">
        <label>Nombre de usuario:</label>
        <input type="text" name="usuario" required><br><br>
        <label>Clave:</label>
        <input type="password" name="clave" required><br><br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>