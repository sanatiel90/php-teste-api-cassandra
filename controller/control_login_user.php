<?php

require_once 'config.php';

$data = [ "login"=> $_POST['login'], "password"=> $_POST['password'] ];

$url = "http://localhost:3000/api/login";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$result = json_decode($response);

if($result->status == '200'){
	session_start();

	$_SESSION['token'] = $result->token; 	
	$_SESSION['user'] = $result->usuario; 	

	//se login ok, chamar func q pega todos os contatos do usuario cadastrado
	request_list_users();

	header("location: http://localhost:8080/index.php");

}else{
	header("location: http://localhost:8080/login.php?login_error");
}




















?>