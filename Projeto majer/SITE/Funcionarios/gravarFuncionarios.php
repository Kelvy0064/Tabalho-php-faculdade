<?php
$nome 				=$_POST['nome'];		
$log 				=$_POST['log'];		
$endereco 			=$_POST['endereco'];		
$cidade 			=$_POST['cidade'];
$complemento 		=$_POST['complemento'];
$telefone 			=$_POST['telefone'];
$celular 			=$_POST['celular'];
$email 				=$_POST['email'];
$sexo 				=$_POST['sexo'];
$numero 			=$_POST['numero'];
$UF 				=$_POST['UF'];
$estadoCivil 		=$_POST['estadoCivil'];
$bairro 			=$_POST['bairro'];
$cep				=$_POST['cep'];
$nFihos 			=$_POST['nFihos'];
$grauInstrucao 		=$_POST['grauInstrucao'];
$dataNascimento 	=$_POST['dataNascimento'];
$nacionalidade 		=$_POST['nacionalidade'];
$nCarteiraTrabalho 	=$_POST['nCarteiraTrabalho'];
$nPIS 				=$_POST['nPIS'];
$cargo 				=$_POST['cargo'];
$loja 				=$_POST['loja'];
$sCarteiraTrabalho  =$_POST['sCarteiraTrabalho'];
$cpf 				=$_POST['cpf'];
$rg 				=$_POST['rg'];
$admissao			=$_POST['admissao'];


echo "Nome do funcionário: $nome<br>";
echo "Tel: $telefone Cel: $celular<br>";
echo "End: $endereco - Nº $numero - UF: $UF<br>";
echo "Email: $email<br>";
echo "Loja: $loja Cargo: $cargo<br>";

if ( strlen($nome) <3 )
	{
		echo "Nome inválido. <br>";
		die("Programa Cancelado !!");
	}

if( $celular == "")
	{
		echo "Celular é obrigatório.<br>";
		die("Programa Cancelado !!");
	}

	$nomeArquivo    = $_FILES['foto'] ['name'];
	$tipoArquivo    = $_FILES['foto'] ['type']; 
	$tamanhoArquivo = $_FILES['foto'] ['size']; 
	$nomeTemporario = $_FILES['foto'] ['tmp_name'];
	
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
	$url = "localhost";
	$user= "root";
	$password="";
	
	$con = mysqli_connect($url, $user, $password);

	$db = "CLINICA_ODONTOLOGICA";
	mysqli_select_db($con, $db) or 
		die("Erro na seleção/abertura do banco
			  $db: " . mysqli_error($con) );
			  
	$sql = "INSERT INTO cadFuncionarios (nome, log, endereco, cidade, complemento, telefone, celular, email, sexo, numero, UF, estadoCivil, bairro, cep, nFihos, grauInstrucao, dataNascimento, foto, nacionalidade, nCarteiraTrabalho, nPIS, cargo, loja, sCarteiraTrabalho, cpf, rg , admissao) 
	VALUES ('$nome','$log','$endereco','$cidade','$complemento','$telefone','$celular','$email','$sexo','$numero','$UF','$estadoCivil','$bairro','$cep','$nFihos','$grauInstrucao','$dataNascimento','$nomeArquivo','$nacionalidade','$nCarteiraTrabalho','$nPIS','$cargo','$loja','$sCarteiraTrabalho','$cpf','$rg','$admissao')";
	
	//echo "Comando SQL: <hr> $sql <hr>";
	
	mysqli_query($con, $sql) or 
		die("Erro na inserção de registro no banco:" .
			mysqli_error($con) );
	echo '<br>';
	echo "<a href='listagem.php'>Listagem</a>";
?>