<?php
// Get request other
// $url = 'https://jsonplaceholder.typicode.com/posts/1';
$url = 'https://www.homecenter.com.co/homecenter-co/';
// Iniciamos una nueva sesion de curl
$ch = curl_init();

// La función curl_setopt recibe tres argumentos: un manipulador de cURL, la opción CURLOPT_XXX y el valor de la opción CURLOPT_XXX.
curl_setopt($ch, CURLOPT_URL, $url);
// en este caso se usa true, para que no muestre la respuesta en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

// Captura la URL y la envía al navegador
$response = curl_exec($ch);
 echo "CON ESTE VARDUMP PUEDO VER LO QUE CONTIENE LA VARIABLE RESPUESTA <br><br>";
 var_dump($response);
 
// Cierrar el recurso cURL y libera recursos del sistema
curl_close($ch);
?>