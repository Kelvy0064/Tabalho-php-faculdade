<?php	// salvar como conexao.php
	// 1 - Conectar no MYSQL
	$url = "localhost";
	$user= "root";
	$password="";
	
	$con = mysqli_connect($url, $user, $password);
	
	// 2 - Abrir o banco de dados
	$db = "CLINICA_ODONTOLOGICA";
	mysqli_select_db($con, $db) or 
		die("Erro na seleção/abertura do banco
			  $db: " . mysqli_error($con) );
?>