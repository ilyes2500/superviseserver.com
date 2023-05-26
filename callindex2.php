<?php

$url = 'http://localhost:8080/server-info/';
$purl ='0.0.0.0/21';
$furl = $url.$purl;


$json1 = file_get_contents($furl);


var_dump($json1);






$test = json_decode($json1);

$bt = $test->status;

$used = $test->usedspace;

$free = $test->freespace;

$time2 = $test->responseTime;

$cpu = $test->cpuUsage;

$ramu =$test->usedram;

$ramf =$test->freeram;

$data1 = array(
    'bt' => $bt,
    'used' => $used,
    'free' => $free,
    'time2' =>$time2,
    'cpu'=>$cpu,
    'ramu'=>$ramu,
    'ramf'=>$ramf

);

// Encode the variables as JSON
$jsonData1 = json_encode($data1);

// Redirect to the HTML page with the JSON data in the URL
header("Location: index2.html?data1=" . urlencode($jsonData1));





exit;




?>

