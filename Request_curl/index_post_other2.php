<?php

// Post request other
// $url = 'https://jsonplaceholder.typicode.com/posts/1';
$url =  '{POST_REST_ENDPOINT}';

$ch = curl_init();
$arrayAsociativo = array ('nombre'=>'Marines', 'Color'=>'Morado');
$data = json_encode($arrayAsociativo);
//var_dump($data);

// curl_setopt($ch, CURLOPT_URL,'https://regres.in/api/users');
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
?>