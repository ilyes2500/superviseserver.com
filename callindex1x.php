<?php

$url = 'http://localhost:8080/server-info/';
$purl ='127.0.0.1/3306';
$furl = $url.$purl;


$json = file_get_contents($furl);

var_dump($json);






$test = json_decode($json);

$ht = $test->status;

$used = $test->usedspace;

$free = $test->freespace;

$time1 = $test->responseTime;

$cpu = $test->cpuUsage;

$ramu =$test->usedram;

$ramf =$test->freeram;

$data = array(
    'ht' => $ht,
    'used' => $used,
    'free' => $free,
    'time1' =>$time1,
    'cpu'=>$cpu,
    'ramu'=>$ramu,
    'ramf'=>$ramf

);

// Encode the variables as JSON
$jsonData = json_encode($data);

// Redirect to the HTML page with the JSON data in the URL
header("Location: index1x.html?data=" . urlencode($jsonData));







exit;




?>

