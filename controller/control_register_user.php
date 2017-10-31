<?php

$data = [
		  "login" => $_POST['login'],
		  "password" => $_POST['password']
			];

$url = "http://localhost:3000/api/register";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$result = json_decode($response,true);

$login = $result['login'];

if($result['status'] == '201'){
	header("location: http://localhost:8080/index.php?user_created=$login");
}




?>
