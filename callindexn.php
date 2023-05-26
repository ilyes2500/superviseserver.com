<?php

$url = 'http://localhost:8080/server-info/';
$purl ='127.0.0.1/3306';
$furl = $url.$purl;

$url1 = 'http://localhost:8080/server-info/';
$purl1 ='0.0.0.0/21';
$furl1 = $url1.$purl1;

$url2 = 'http://localhost:8080/server-info/';
$purl2 ='142.250.179.78/80';
$furl2 = $url2.$purl2;


$url3 = 'http://localhost:8080/server-info/';
$purl3 ='192.168.56.1/8080';
$furl3 = $url3.$purl3;




$json = file_get_contents($furl);

$json1 = file_get_contents($furl1);

$json2 = file_get_contents($furl2);

$json3 = file_get_contents($furl3);



$test = json_decode($json);

$test1 = json_decode($json1);

$test2 = json_decode($json2);

$test3 = json_decode($json3);


$used = $test->usedspace;

$free = $test->freespace;

$time = $test->responseTime;


$used1 = $test1->usedspace;

$free1 = $test1->freespace;

$time1 = $test1->responseTime;


$used2 = $test2->usedspace;

$free2 = $test2->freespace;

$time2 = $test2->responseTime;



$used3 = $test3->usedspace;

$free3 = $test3->freespace;

$time3 = $test3->responseTime;


$datan = array(
    
    'used' => $used,
    'free' => $free,
    'time' =>$time

);

$datan1 = array(
    
    'used1' => $used1,
    'free1' => $free1,
    'time1' =>$time1

);

$datan2 = array(
    
    'used2' => $used2,
    'free2' => $free2,
    'time2' =>$time2

);

$datan3 = array(
    
    'used3' => $used3,
    'free3' => $free3,
    'time3' =>$time3

);

// Encode the variables as JSON
$jsonData = json_encode($datan);
$jsonData1 = json_encode($datan1);
$jsonData2 = json_encode($datan2);
$jsonData3 = json_encode($datan3);

// Redirect to the HTML page with the JSON data in the URL
header("Location: index.html?datan=" . urlencode($jsonData) . "&datan1=" . urlencode($jsonData1). "&datan2=" . urlencode($jsonData2 )."&datan3=" . urlencode($jsonData3));









exit;




?>

