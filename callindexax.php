<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ip = $_POST["ip"];
    $port = $_POST["port"];
    $nom = $_POST["nom"];
}


$url = 'http://localhost:8080/server-info/';
$purl = $ip.'/'.$port;
$furl = $url.$purl;

$jsona = file_get_contents($furl);

var_dump($jsona);






$testa = json_decode($jsona);

$hta = $testa->status;

$useda = $testa->usedspace;

$freea = $testa->freespace;

$timea = $testa->responseTime;

$cpua = $testa->cpuUsage;

$ramua =$testa->usedram;

$ramfa =$testa->freeram;

$dataa = array(
    'hta' => $hta,
    'useda' => $useda,
    'freea' => $freea,
    'timea' =>$timea,
    'cpua'=>$cpua,
    'ramua'=>$ramua,
    'ramfa'=>$ramfa,
    'ip'=>$ip,
    'port'=>$port,
    'nom'=>$nom

);

// Encode the variables as JSON
$jsonDataa = json_encode($dataa);

// Redirect to the HTML page with the JSON data in the URL
header("Location: indexax.html?dataa=" . urlencode($jsonDataa));








exit;


?>
