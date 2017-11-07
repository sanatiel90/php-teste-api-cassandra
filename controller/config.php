<?php

session_start();

if(!isset($_SESSION['token'])){
	header("location: http://localhost:8080/login.php");
}

// func q faz requisicao para pegar todos contatos do user logado 
function request_list_users(){

	$token = $_SESSION['token'];
	$url = "http://localhost:3000/api/contacts?token=$token";
	$ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	$res = json_decode($response);
	$_SESSION['contacts'] = $res;	

}








?>