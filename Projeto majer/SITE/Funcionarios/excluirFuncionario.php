<?php

	echo "<h2>Exclus�o de Funcion�rio</h2>";
	$id = $_GET['c'];
	echo "Eliminando Funcin�rio $id...<br>";
	
	include "conexao.php";
	
	$sql = "DELETE FROM cadFuncionarios WHERE id=$id";
	
	mysqli_query($con, $sql) or 
		die("Erro na exclus�o do Funcinario $id: " . 
			mysqli_error($con));
			
	echo "Registro eliminado!!<br>";
	echo "<a href='listagem.php'>Listagem</a>";

?>