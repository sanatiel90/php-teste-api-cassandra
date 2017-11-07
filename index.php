<?php 

session_start(); 

if(!isset($_SESSION['token'])){
	header("location: http://localhost:8080/login.php");
}

if(isset($_SESSION['contacts'])){
  $result = $_SESSION['contacts'];  
}

$contacts = false;

if(isset($result)){
    if(count($result->contatos) > 0){
      $contacts = true;
    }
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


  <?php if (isset($_GET['contact_created'])){ ?>         
       <div class="alert alert-info text-center"> <strong> Contato criado com sucesso</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button> </div>

 <?php  } ?>


  <?php if (isset($_GET['contact_not_created'])){ ?>         
       <div class="alert alert-info text-center"> <strong> Não foi possível criar o contato</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button> </div>

 <?php  } ?>

   <?php if (isset($_GET['contact_deleted'])){ ?>         
       <div class="alert alert-info text-center"> <strong> Contato deletado com sucesso</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button> </div>

 <?php  } ?>

   <?php if (isset($_GET['contact_not_deleted'])){ ?>         
       <div class="alert alert-info text-center"> <strong> Não foi possível deletar o contato</strong> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button> </div>

 <?php  } ?>

  
	<main>
		<div class="container-fluid">
			<div class="col-lg-1"></div>
			
			<div class="col-lg-10">
				<h4 class="text-center">Bem vindo, <label><?php echo $_SESSION['user']; ?> </label>! <br> <button id="bt-new" class="btn btn-sm btn-success">Adicionar Contato</button>  <a href="controller/control_logout.php" class="btn btn-sm btn-primary" id="bt-logout">Sair do Sistema</button></a>   </h4>	   
         
                   <div class="col-lg-4"></div>    
                    
                    <div class="col-lg-4" >

            
            <form method="POST" action="controller/control_add_contact.php" id="form-new" style="display: none" >
              <h4 class="text-center">Novo contato</h4>
              <p>Nome</p>
              <input type="text" name="nome_contato" class="form-control">
              <p>Telefone</p>
              <input type="text" name="tel_contato" class="form-control"> 
              <br>
              <button class="btn btn-block btn-success">Cadastrar</button>
            </form>
                         
                         
                         <h3 class="text-center">Lista de contatos</h3>
                         <table class="table">
                             <thead>
                                 <tr>
                                    <td class="text-center" ><label>Nome</label></td>
                                    <td class="text-center" ><label>Telefone</label></td>
                                    <td class="text-center" ><label>Ação</label></td>  
                                 </tr> 
                             </thead>
                             <tbody>
                                <?php        

                                   if($contacts == true){
                                        
                                   for ($i=0; $i < count($result->contatos); $i++) { 
                                     
                                 ?>
                                  <tr> 
                                   <td class="text-center" ><?php echo $result->contatos[$i]->cont_name; ?></td> 
                                   <td class="text-center" ><?php echo $result->contatos[$i]->cont_tel; ?></td> 
                                   <td class="text-center" ><label><a class="btn btn-sm btn-danger glyphicon glyphicon-trash" href="controller/control_del_contact.php?name=<?php echo $result->contatos[$i]->cont_name;  ?>"></a></label></td>
                                  </tr>

                               
                                  <?php  } }else{  ?> 
                                    <tr> 
                                     <td class="text-center" >Você não possui contatos cadastrados</td> 
                                     
                                    </tr>


                                   <?php } ?>  
                                 

                                 

                                

                             </tbody>

                         </table>

                    </div>
                   
                    <div class="col-lg-4" ></div>

       		</div>

       		<div class="col-lg-12" id="content-new" style="display: none;">
       			<br>
       		  <div class="col-lg-4"></div>
       		  
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