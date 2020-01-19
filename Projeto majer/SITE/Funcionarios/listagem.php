<?php

	include "conexao.php";
	
	$comandoSQL = "select * from cadFuncionarios" ;
	
	$registros = mysqli_query($con, $comandoSQL ) 
		or die("Erro na seleção de dados:" .
			mysqli_error($con) );
			
	$linhas = mysqli_num_rows($registros) ;
	
	if ($linhas<1)
	{
		die('Cadastro de Times está vazio!');
	}
	
	echo "Registros encontrados: $linhas <br>";
	
	$contador = 0;
	
	echo "<table border='1'>";
	
	echo "<tr>";
	echo "  <th>Foto</th>";
	echo "	<th>Código</th>";
	echo "	<th>Nome:</th>" ;
	echo "	<th>Tel:</th>";
	echo "	<th>E-mail</th>";
	echo "	<th>Loja</th>";
	echo "	<th>Cargo</th>";
	echo "	<th>Adimissão</th>";
	echo "	<th colspan='2'>Ações</th>";
	echo "</tr>";
	
	while( $contador < $linhas )
	{
		$dados = mysqli_fetch_array($registros);
		
		
		$id 	 = $dados['id'] ;
		$nome 	 = $dados['nome'];
		$tel	 = $dados['telefone'];
		$email	 = $dados['email'];
		$loja 	 = $dados['loja'];
		$cargo	 = $dados['cargo'];
		$admissao= $dados['admissao'];
		$foto	 = $dados['foto'];
	
		echo "<tr>";
		echo "	<td>  <img src='foto/$foto'>  </td>" ;
		echo "	<td>$id </td>";	
		echo "	<td>$nome</td>";
		echo "	<td>$tel</td>" ;
		echo "	<td>$email</td>" ;
		echo "	<td>$loja</td>" ;
		echo "	<td>$cargo</td>" ;
		echo "	<td>$admissao</td>" ;
		
		
		echo "	<td> <a href='excluirFuncionario.php?c=$id'><img src='icones/delete.png' alt='Deletar' title='Deletar';></a> </td>";
		echo "	<td> <a href='alterarFuncionarios.php?c=$id'><img src='icones/edit.png' alt='Editar' title='Editar';></a></td>"; 
		echo "</tr>"; 
	
		$contador++;
	}
	echo "</table>";
	echo "<a href='cadFuncionarios.html'>Novo Cadastro</a>";
?>