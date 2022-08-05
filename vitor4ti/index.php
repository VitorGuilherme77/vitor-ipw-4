<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Folha de estilos-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Eu amo PHP D++++</title>
  </head>
  <body>
    <header class="d-felx">
	  <div class="container aling-items-center">
	    <h1> Vitor - IPW 4 Mendes </h1>
		</div>
	</header>
	<section class="container">
		<main class="col p-4">
		<?php 
			if(isset($_GET['dir']) and isset($_GET['file'])){
				echo '<a href="index.php"> Voltar</a><br><br>';
				include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
			}else{

		?>
		<div class="row">
		 <div class="col-md-4 p2">
		   <div class="p-0 modulo verde-escuro">
			   <h3 class="p-2"> Introdução PHP</h3>	
				<ul>
				  <li>
				     <a href="?dir=1_introducao&file=1_echo">1_echo</a>
				  </li>
				  <li>
				     <a href="?dir=1_introducao&file=2_variavel">2_variavel</a>
				  </li>
				  <li>
				     <a href="?dir=1_introducao&file=3_comentario">3_comentario</a>
				  </li>	
				  <li>
				     <a href="?dir=1_introducao&file=4_string">4_string</a>
				  </li>					  
		  		</ul>   		
		   </div>
		  </div>
		  
		
		  <div class="col-md-4 p-2">
		    <div class="p-0 modulo verde-escuro">
			   <h3 class="p-2"> 2_funcoes</h3>	
				<ul>
				  
				  <li>
				     <a href="?dir=2_funcoes&file=1_funcoes">1_funcoes</a>
				  </li>	
					
					<li>
				    
					<a href="?dir=2_funcoes&file=2_funcoesDate">2_funcoesDate</a>
				  </li>	
				  <li>
				     <a href="?dir=2_funcoes&file=3_funcaopow">3_funcaopow</a>
				  </li>	
				  <li>
				     <a href="?dir=2_funcoes&file=4_funcoesStrlen">4_funcoesStrlen</a>
				  </li>	
				  <li>
				     <a href="?dir=2_funcoes&file=5_return">5_return</a>
				  </li>
				  <li>
				     <a href="?dir=2_funcoes&file=7_exercicio1">7_exercicio1</a>
				  </li>	
				   <li>				  
				     <a href="?dir=2_funcoes&file=8_exercicio2">8_exercicio2</a>
				  </li>	
		  		
				</ul>   		
		   </div>
		  </div>
		 
		  <div class="col-md-4 p-2">
		    <div class="p-0 modulo verde-escuro">
			   <h3 class="p-2"> 3_array</h3>	
				<ul>
				  <li>
				     <a href=
					 "?dir=3_array&file=1_array">
					 1_funcoes</a>
				  </li>

					</ul>
					</div>
					</div>
				
			
		  <div class="col-md-4 p-2">
		    <div class="p-0 modulo verde-escuro">
			   <h3 class="p-2"> 4_pdo</h3>	
				<ul>
				  <li>
				     <a href=
					 "?dir=4_pdo&file=1_pdo">
					 1 PDO</a>
				  </li>

				<li>
				     <a href=
					 "?dir=4_pdo&file=2_trycatch">
					 2_trycatch</a>
				  </li>
					
					<li>
				     <a href=
					 "?dir=4_pdo&file=3_execute">3_execute</a>
				  </li>

					</ul>
					</div>
					</div>
			
		  
		  
		  
		  
		
		<?php } ?>
		</main>
		 </div>
	</section>  	
	<footer>
		<div class="container row">
			copyright <?php echo date ('Y'); ?> TI Mendes
		</div>
	</footer>
	
	
	
	

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>