<?php

session_start();

$data = [ "token"=> $_SESSION['token'] ];

$url = "http://localhost:3000/api/contacts";
$ch = curl_init($url);

//curl_setopt($ch, CURLOPT_GET, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$result = json_decode($response);

$_SESSION['contacts'] = $result;	 	

header("location: http://localhost:8080/list.php");





















?>