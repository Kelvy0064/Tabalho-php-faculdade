<?php
    $fornecedor = $_POST['fornecedor'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $condicoes_pagamento = $_POST['condicoes_pagamento'];
    $telefone1 = $_POST['telefone1'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $inscricao_estadual = $_POST['inscricao_estatual'];
    $numero = $_POST['numero'];
    $estado = $_POST['estado'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $data_cadastro = $_POST['data_cadastro'];
    $telefone2 = $_POST['telefone2'];
    $contato = $_POST['contato'];
    $contrato = $_POST['contrato'];
    $produto1 = $_POST['produto1']; 
    $produto2 = $_POST['produto2'];
    $produto3 = $_POST['produto3'];
    $produto4 = $_POST['produto4'];
    $produto5 = $_POST['produto5'];
    $produto6 = $_POST['produto6'];
    $produto7 = $_POST['produto7'];
    $produto8 = $_POST['produto8'];
    $obs = $_POST['obs'];
    if( $fornecedor == "")
	{
		echo ".<br>";
		die("Programa Cancelado !!");
	}

	$nomeArquivo    = $_FILES['contrato'] ['name'];
	$tipoArquivo    = $_FILES['contrato'] ['type']; 
	$tamanhoArquivo = $_FILES['contrato'] ['size']; 
	$nomeTemporario = $_FILES['contrato'] ['tmp_name'];
	
	if($nomeArquivo <> "")
	{
		echo "<hr>Nome do arquivo: $nomeArquivo <br>";
		echo "Tipo: $tipoArquivo <br>";
		echo "Tamanho: $tamanhoArquivo bytes <br>";
		echo "Local (nome Temp): $nomeTemporario<br>";
		
		$nomeFinal = "foto/" . $_FILES['foto'] ['name'];
		
		if ( move_uploaded_file($nomeTemporario, $nomeFinal) )
		{
			echo 'foto transferido p/ a pasta foto. <br>';
		}
		else
		{
			echo 'Ocorreu algum erro ao tentar mover a para a pasta destino.<br>';
		}
	}
	include "conexao.php";
			  
	$sql = "INSERT INTO Fornecedores (fornecedor, cnpj, endereco, cidade, condicoes_pagamento, telefone1, celular, email, inscricao_estatual, numero, estado, 
        bairro, cep, data_cadastro, telefone2, contato, contrato, produto1, produto2, produto3, produto4, produto5, produto6, produto7, produto8, obs) 
	VALUES ('$fornecedor', '$cnpj', '$endereco', '$cidade', '$condicoes_pagamento', '$telefone1', '$celular', '$email', '$inscricao_estadual', '$numero', '$estado', 
        '$bairro', '$cep', '$data_cadastro', '$telefone2', '$contato', '$contrato', '$produto1', '$produto2', '$produto3', '$produto4', '$produto5', '$produto6', '$produto7', '$produto8', '$obs')";
	
		
	mysqli_query($con, $sql) or 
		die("Erro na inser��o de registro no banco:" .
			mysqli_error($con) );
	
?>