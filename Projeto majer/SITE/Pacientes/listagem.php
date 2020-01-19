<?php
    include "conexao.php";
    $comandoSQL = "SELECT * FROM Pacientes";
    $registro = mysqli_query($con, $comandoSQL) or die("Erro na seleção de dados:" 
    .mysqli_error($con) );
    $linhas = mysqli_num_rows($registro);
    if ($linhas<1)
	{
		die('Cadastro de pacientes está vazio!');
    }
    echo "<table border='1'>";
        echo "<tr>";
            echo  "<td>Nome</td>";
            echo  "<td>Endereço</td>";
            echo  "<td>Bairro</td>";
            echo  "<td>Estado</td>";
            echo  "<td>Telefone</td>";
            echo  "<td>Celular</td>";
            echo  "<td>E-mail</td>";
            echo  "<td>RG</td>";
            echo  "<td>CPF</td>";
            echo  "<td>Data de nascimento</td>";
            echo  "<td>Convenio</td>";
            echo  "<td>Foto do paciente</td>";
            echo  "<td>Obs</td>";
            echo  "<td colspan='2'>Açoes</td>";
        echo "</tr> ";
        while( $contador < $linhas )
	    {
            $dados = mysqli_fetch_array($registros);
            $id = $dados['id'];
            $nome = $dados['nome'];
            $endereco = $dados['endereco'];
            $bairro = $dados['bairro'];
            $estado = $dados['estado'];
            $telefone = $dados['telefone'];
            $celular = $dados['celular'];
            $email = $dados['email'];
            $rg = $dados['rg'];
            $cpf = $dados['cpf'];
            $dataNascimento = $dados['dataNascimento'];
            $convenio = $dados['convenio'];
            $fotoPaciente = $dados['foto'];
            $observacao = $dados['obs'];        
            echo "<tr>";
                echo  "<td>$nome</td>";
                echo  "<td>$endereco</td>";
                echo  "<td>$bairro</td>";
                echo  "<td>$estado</td>";
                echo  "<td>$telefone</td>";
                echo  "<td>$celular</td>";
                echo  "<td>$email</td>";
                echo  "<td>$rg</td>";
                echo  "<td>$cpf</td>";
                echo  "<td>$dataNascimento</td>";
                echo  "<td>$convenio</td>";
                echo  "<td><img src='foto/$fotoPaciente'></td>";
                echo  "<td>$observacao</td>";
                echo  "<td><a href='alterarPaciente.php?c=$id'>Alterar</a></td>";
                echo  "<td><a href='exclusao.php?c=$id'>Excluir</a></td>";
            echo "</tr> ";
	    	$contador++;
        }
        echo "</table>";
    echo"<a href='Cadastro de pacientes.html'>Cadastrar novo paciente</a>";
?>
