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
		<div class="col-lg-12">
			<div class="col-lg-4"></div>
			
			<div class="col-lg-4">
				<h4 class="text-center">Faça o login na aplicação ou cadastre-se</h4>	
				<br>

				<!-- tabs de menu -->
				<ul class="nav nav-pills nav-justified" role="tablist">
  					<li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="pill">Login</a></li>
  					<li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="pill" >Cadastro</a></li>
				</ul>


<!-- conteudo das tabs -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="login">

    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">
      	<h4 class="text-center">Acessar conta</h4>
       <form method="POST" action="">
      	<label>Login do usuário</label>
      	<input required type="text" name="login" class="form-control">
      	<label>Senha do usuário</label>
      	<input type="password" name="password" class="form-control">
      	<br>
      	<button class="btn btn-block btn-success">Entrar</button>	
       </form>
       
      </div>


    </div> <!-- panel default -->
      <!--<div class="panel-body">
      <p>..alguma coisa aq.</p>
    </div>-->



  </div> <!-- tabpanel -->




<div  role="tabpanel" class="tab-pane fade" id="register">

 <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
  	 <h4 class="text-center">Nova conta</h4>
  	  <form method="POST" action="controller/control_register_user.php">
  	 	<label>Login do usuário</label>
      	<input required type="text" name="login" class="form-control">
      	<label>Senha do usuário</label>
      	<input type="password" name="password" class="form-control">
      	<br>
      	<button class="btn btn-block btn-success">Cadastrar</button>
      </form>
   </div>

 </div> <!--default -->
     

</div> <!-- tapanel -->




</div> <!-- table content -->


			</div> <!-- col-lg-8 -->
			
			<div class="col-lg-4"></div>
		</div>
	</main>
	
	<footer>
    <?php if (isset($_GET['user_created'])){
          echo $_GET['user_created'];
    } ?>
		
	</footer>
	
<script src="bootstrap/js/jquery.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>