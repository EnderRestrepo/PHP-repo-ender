<?php

// Transferencia de datos vía $_POST y contraseña

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"]; 
echo "Hola " . $nombre . " " . $apellido . ", <br /> 
Te has registrado con el siguiente correo electrónico: " . $email . ".  <br />";

$contrasena = $_POST["contrasena"];

if($contrasena=="qwertz123")
   {
   echo "La contraseña es correcta";
   }
else
   {
   echo "La contraseña es incorrecta";
   }
?>