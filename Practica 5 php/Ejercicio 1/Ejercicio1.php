<body>
<?php
$fecha=date("d-m-Y");
$hora= date("H :i:s");
$destino="lagosfranco23@gmail.com";
$desde= $_POST['Email'];
$mensaje= $_POST['Mensaje'];
$asunto= $_POST['Asunto'];
mail($destino,$asunto,$mensaje,$desde);
echo "Correo enviado correctamente";
?>
</body>
