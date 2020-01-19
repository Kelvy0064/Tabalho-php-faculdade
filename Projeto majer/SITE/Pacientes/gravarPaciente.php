<?php
		
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$estado = $_POST['estado'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$email = $_POST['email'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$dataNascimento = $_POST['dataNascimento'];
	$convenio = $_POST['convenio'];
	$fotoPaciente = $_POST['foto'];
	$observacao = $_POST['obs']; 

	echo "Nome do paciente :$nome <br>";
    echo "Endereço :$endereco <br>";
    echo "Bairro :$bairro <br>";
    echo "Estado :$estado <br>";
    echo "Telefone :$telefone <br>";
    echo "Celular :$celular <br>";
    echo "E-mail :$email <br>";
    echo "Rg :$rg <br>";
    echo "CPF :$cpf <br>";
    echo "Data de nascimento :$dataNascimento <br>";
    echo "Convenio :$convenio <br>";
    echo "Foto :$fotoPaciente <br>";
    echo "Obs :$observacao <br>";
	
	if( $nome == "")
	{
		echo ".<br>";
		die("Programa Cancelado !!");
	}

	$nomeArquivo    = $_FILES['fotoPaciente'] ['name'];
	$tipoArquivo    = $_FILES['fotoPaciente'] ['type']; 
	$tamanhoArquivo = $_FILES['fotoPaciente'] ['size']; 
	$nomeTemporario = $_FILES['fotoPaciente'] ['tmp_name'];
	
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
			  
	$sql = "INSERT INTO Paciente (id, nomePaciente, endereco, bairro, estado, telefone, celular, email, rg, cpf, dataNascimento, convenio, fotoPaciente, obs) 
	VALUES ('','$nome','$endereco','$bairro','$estado','$telefone','$celular','$email','$rg','$cpf','$dataNascimento','$convenio','$fotoPaciente','$observacao')";
	
		
	mysqli_query($con, $sql) or 
		die("Erro na inser��o de registro no banco:" .
			mysqli_error($con) );
	
?>