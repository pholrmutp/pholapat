<?php


$access_token = '+yvfpllsF0x8JZDsNrF+PlMOsXi4rj/SU5TIpVfBuXebs9C7hrEiEoc+Ws9V+W/wZsCyNAZNGkH54W9lpTUZ81H1N/90TRmIama6KDuq682PGdN0gwKgc0BaeoyEPBZ8xh4XJtkZ0RySUdhuMWAFKwdB04t89/1O/w1cDnyilFU=';

$userId = 'Ue4fcf5fa0e1fa60d84433c7614e61b56';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
