<?php

session_start();

$_SESSION['token'] = null; 	
$_SESSION['user'] = null; 	
$_SESSION['contacts'] = null;

session_destroy();

header("location: http://localhost:8080/login.php?logout");


















?>