<?php	
	$url = "localhost";
	$user= "root";
	$password="";
	
	$con = mysqli_connect($url, $user, $password);
	
	$db = "CLINICA_ODONTOLOGICA";
	mysqli_select_db($con, $db) or 
		die("Erro na seleção/abertura do banco
			  $db: " . mysqli_error($con) );
?>
