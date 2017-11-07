<?php
require_once 'config.php';

session_start();


if(!isset($_SESSION['token'])){
	header("location: http://localhost:8080/login.php");
}

  $token = $_SESSION['token'];
  $nome_contato = $_GET['name'];



$url = "http://localhost:3000/api/contacts/$nome_contato?token=$token";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$result = json_decode($response,true);


if($result['status'] == '200'){
	//se cadastro ok, chamar func q pega todos os contatos do usuario cadastrado
	request_list_users();
	
	header("location: http://localhost:8080/index.php?contact_deleted");
}else{
	header("location: http://localhost:8080/index.php?contact_not_deleted");
}




?>
