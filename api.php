<?php
$webhookurl1 = $_GET["url1"];
$webhookurl2 = $_GET["url2"];
$content = $_GET["content"];

$webhookurl = 'https://discordapp.com/api/webhooks/' . $webhookurl1 . '/' . $webhookurl2;
$msg = $content;
$json_data = array ('content'=>"$msg");
$make_json = json_encode($json_data);
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $make_json);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
?>