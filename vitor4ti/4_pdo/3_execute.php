<?php
include '2_trycatch.php';


	
	//$query ="insert into teste (nome,email) values ('Serjão','serjiocarlos@escola.com');
	$query ="update teste set nome = 'serjao b' where id = 1";
	$query ="delete from teste where id = 4";
	
    $sql = $conexao->prepare($query);
	$resultado = $sql->execute();
echo 'teste';
?>	


