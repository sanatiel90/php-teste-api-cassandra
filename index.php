<?php 

session_start(); 

if(!isset($_SESSION['token'])){
	header("location: http://localhost:8080/login.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Página Inicial</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<header> 
		<h1 class="text-center">Agenda Virtual</h1> 
	</header>

  
	<main>
		<div class="container-fluid">
			<div class="col-lg-1"></div>
			
			<div class="col-lg-10">
				<h4 class="text-center">Bem vindo, <label><?php echo $_SESSION['user']; ?> </label>! escolha uma opção:</h4>	
				
			 <div class="col-lg-4" > <button class="btn btn-block btn-primary" id="bt-list">Listar contatos</button> </div>	

			 <div class="col-lg-4" ><button class="btn btn-block btn-primary" id="bt-new">Novo contato</button></div>

			 <div class="col-lg-4" ><button class="btn btn-block btn-primary" id="bt-del">Deletar</button></div>		
       
       		<div class="col-lg-12" id="content-list"  style="background-color: yellow; display: none;">
       			
       		</div>

       		<div class="col-lg-12" id="content-new" style="display: none;">
       			<br>
       		  <div class="col-lg-4"></div>
       		  <div class="col-lg-4">
       		  	<label class="text-center">Novo contato</label>
       			<form method="POST" action="" >
       				<p>Nome</p>
       				<input type="text" name="" class="form-control">
       				<p>Telefone</p>
       				<input type="text" name="" class="form-control"> 
       				<br>
       				<button class="btn btn-block btn-success">Cadastrar</button>
       			</form>

       		  </div>
       		  <div class="col-lg-4"></div>	
       			
       		</div>

       		<div class="col-lg-12" id="content-del" style="background-color: red; display: none;">
       			DELETAR
       		</div>

 			</div> <!-- col-lg-8 -->
 			
			
			<div class="col-lg-1">
       

     	    </div>
		</div>
	</main>
	
	<footer>
    
		
	</footer>
	

<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/script.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>