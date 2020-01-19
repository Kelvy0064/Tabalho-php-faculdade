<?php
	echo "<h2>Exclusão de paciente</h2>";
	$id = $_GET['c'];
	include 'conexao.php';
	$sql = "DELETE FROM Pacientes WHERE id=$id";
	mysqli_query($con, $sql) or 
		die("Erro na exclusão do paciente $id: " . 
			mysqli_error($con));
	echo "Registro eliminado!<br>";
	echo "<a href='listagem.php'>Listagem de pacientes</a>";
?>
