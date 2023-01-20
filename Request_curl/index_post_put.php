<?php

// POST request

$ch = curl_init();
$arrayAsociativo = array ('nombre'=>'Marines', 'Color'=>'Morado');
$data = http_build_query($arrayAsociativo);
//var_dump($data);

// curl_setopt($ch, CURLOPT_URL,'https://regres.in/api/users');
curl_setopt($ch, CURLOPT_URL,'https://jsonplaceholder.typicode.com/posts/');
// Puede ser Patch o put
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) echo curl_error($ch);
else $decode = json_decode($response, true);
// var_dump($decode);

foreach ($decode as $index => $value)
{
    //echo "$index->[$value] </br>";
    // echo "$index[$value] </br>";
   echo "$index:$value </br>";
   echo "$index=>$value </br>";
   // echo $index['value'];
}
// var_dump($index);
curl_close($ch);
?>