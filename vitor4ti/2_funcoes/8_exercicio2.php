<?php
/*criar uma funçao que receba 2 nomes ,e retorne (return) o maior deles com a frase ' o maior nome é':

*/  
  
  function receba ($nome1,$nome2){
	  
	  if (strlen($nome1) > strlen($nome2)){
		  return 'o maior numero é :' . $nome1;
	  }else{
		  return ' o maior nome é: ' .$nome2;
	  }
  }

 echo receba ('botacamila','tiaum');
 echo '<br>' ;
 
 echo receba ('jabiraca','jacowisk');
 echo '<br>' ;
 
 echo receba ('chevette','opala');
 echo '<br>' ;
 
  
  
  
  ?>