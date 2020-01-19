<?php

	echo "<h2>Exclusão de Funcionário</h2>";
	$id = $_GET['c'];
	echo "Eliminando Funcinário $id...<br>";
	
	include "conexao.php";
	
	$sql = "DELETE FROM cadFuncionarios WHERE id=$id";
	
	mysqli_query($con, $sql) or 
		die("Erro na exclusão do Funcinario $id: " . 
			mysqli_error($con));
			
	echo "Registro eliminado!!<br>";
	echo "<a href='listagem.php'>Listagem</a>";

?>