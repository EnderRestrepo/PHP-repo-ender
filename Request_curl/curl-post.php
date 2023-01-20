<?php
$url = '{POST_REST_ENDPOINT}';
 
$curl = curl_init();
 
$fields = array(
    'field_name_1' => 'Value 1',
    'field_name_2' => 'Value 2',
    'field_name_3' => 'Value 3'
);
 
 // echo $fields ['field_name_1'];
 
$fields_string = http_build_query($fields);
 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);
 
$data = curl_exec($curl);
 
curl_close($curl);

?>