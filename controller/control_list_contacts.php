<?php

session_start();

if(!isset($_SESSION['token'])){
	header("location: http://localhost:8080/login.php");
}

$token = $_SESSION['token'];


$url = "http://localhost:3000/api/contacts?token=$token";
$ch = curl_init($url);

//curl_setopt($ch, CURLOPT_GET, json_encode($data));
//curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$result = json_decode($response);

//print_r($result);
//echo $result->contatos[0]->cont_name;

$_SESSION['contacts'] = $result;

//print_r($_SESSION['contacts']);

if($result->status == '200'){
	$_SESSION['contacts'] = $result;
	header("location: http://localhost:8080/index.php?list_contacts");
}else{
	$_SESSION['contacts'] = null;
	header("location: http://localhost:8080/index.php?no_contacts");
}





















?>