<?php
	echo "<h2>Exclusão de fornecedores</h2>";
	$id = $_GET['c'];
	include 'conexao.php';
	$sql = "DELETE FROM Fornecedores WHERE id=$id";
	mysqli_query($con, $sql) or 
		die("Erro na exclusão do fornecedor $id: " . 
			mysqli_error($con));
	echo "Registro eliminado!<br>";
	echo "<a href='listagem.php'>Listagem de fornecedor</a>";
?>
