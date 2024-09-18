<?php

$count = 1000;

for($i = $count; $i < 1000*$count; $i = $i + $count){

    $ch = curl_init();

    $apiKey = 'YOUR_API_KEY';

    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'GET');

    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $apiKey) );
    $params = ['skip'=>$i,'limit'=>$count];

    curl_setopt($ch,CURLOPT_URL,'/api/hotels?'.http_build_query($params));
    $response = curl_exec($ch);
    curl_close($ch);


    $response = json_decode($response,true);

    print_r($response); // echo "<pre>";var_dump($response);

    sleep(3601);

}