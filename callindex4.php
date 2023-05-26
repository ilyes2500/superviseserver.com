<?php

$url = 'http://localhost:8080/server-info/';
$purl ='192.168.56.1/8080';
$furl = $url.$purl;


$json3 = file_get_contents($furl);


var_dump($json3);






$test = json_decode($json3);

$bt = $test->status;

$used = $test->usedspace;

$free = $test->freespace;

$time4 = $test->responseTime;

$cpu = $test->cpuUsage;

$ramu =$test->usedram;

$ramf =$test->freeram;

$data3 = array(
    'bt' => $bt,
    'used' => $used,
    'free' => $free,
    'time4' =>$time4,
    'cpu'=>$cpu,
    'ramu'=>$ramu,
    'ramf'=>$ramf

);

// Encode the variables as JSON
$jsonData3 = json_encode($data3);

// Redirect to the HTML page with the JSON data in the URL
header("Location: index4.html?data3=" . urlencode($jsonData3));





exit;




?>

