<?php

$data = [
		  "token"=> $_SESSION['token'],
		  "nome_contato" => $_POST['nome_contato'],
		  "tel_contato" => $_POST['tel_contato']
			];

$url = "http://localhost:3000/api/contacts";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$result = json_decode($response,true);


if($result['status'] == '201'){
	header("location: http://localhost:8080/list.php?contact_created");
}else{
	header("location: http://localhost:8080/index.php?contact_not_created");
}




?>
