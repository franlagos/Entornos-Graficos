<body>
<?php
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

echo "Le has recomendado la pagina a tu amigo" . $email . "<br>";
echo "El mensaje que le has enviado es: " . $mensaje;
?>  
</body>