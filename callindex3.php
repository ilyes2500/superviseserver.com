<?php

$url = 'http://localhost:8080/server-info/';
$purl ='142.250.179.78/80';
$furl = $url.$purl;


$json2 = file_get_contents($furl);


var_dump($json2);






$test = json_decode($json2);

$bt = $test->status;

$used = $test->usedspace;

$free = $test->freespace;

$time3 = $test->responseTime;

$cpu = $test->cpuUsage;

$ramu =$test->usedram;

$ramf =$test->freeram;

$data2 = array(
    'bt' => $bt,
    'used' => $used,
    'free' => $free,
    'time3' =>$time3,
    'cpu'=>$cpu,
    'ramu'=>$ramu,
    'ramf'=>$ramf

);

// Encode the variables as JSON
$jsonData2 = json_encode($data2);

// Redirect to the HTML page with the JSON data in the URL
header("Location: index3.html?data2=" . urlencode($jsonData2));





exit;




?>

