<?php

function comprobar_nombre_usuario($nombre_usuario){

   if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20){
      echo $nombre_usuario . " no es válido<br>";
      return false;
   }

   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";
   for ($i=0; $i<strlen($nombre_usuario); $i++){

      if (strpos($permitidos, substr($nombre_usuario, $i, 1)) === false){
         echo $nombre_usuario . " no es válido<br>";
         return false;
      }
   }
   echo $nombre_usuario . " es válido<br>";
   return true;
}

echo "<h2>Probando la función comprobar_nombre_usuario:</h2>";

echo "<h3>Nombres de usuario válidos:</h3>";
comprobar_nombre_usuario("Usuario123");
comprobar_nombre_usuario("Mi_Nombre_Usuario");
comprobar_nombre_usuario("corto");

echo "<h3>Nombres de usuario no válidos (demasiado cortos):</h3>";
comprobar_nombre_usuario("us");
comprobar_nombre_usuario("a");

echo "<h3>Nombres de usuario no válidos (demasiado largos):</h3>";
comprobar_nombre_usuario("este_nombre_de_usuario_es_demasiado_largo_para_ser_valido");
comprobar_nombre_usuario("otro_nombre_mas_largo_que_el_limite_permitido");

echo "<h3>Nombres de usuario no válidos (caracteres no permitidos):</h3>";
comprobar_nombre_usuario("Usuario con espacios");
comprobar_nombre_usuario("Usuario!");
comprobar_nombre_usuario("Usuario@");
comprobar_nombre_usuario("Usuario%");

?>