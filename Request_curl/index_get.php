<?php
// Get request

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://jsonplaceholder.typicode.com/posts/1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Captura la URL y la envía al navegador
$response = curl_exec($ch);

if (curl_errno($ch)) echo curl_error($ch);
else $decode = json_decode($response, true);
var_dump($decode);

// Cierrar el recurso cURL y libera recursos del sistema
curl_close($ch);
?>