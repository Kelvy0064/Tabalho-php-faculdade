<?php
    include "conexao.php";
    $comandoSQL = "SELECT * FROM Fornecedores";
    $registro = mysqli_query($con, $comandoSQL) or die("Erro na seleção de dados:" .
        mysqli_error($con));
    $linhas = mysqli_num_rows($registro);
    if ($linhas<1)
	{
		die('Cadastro de Fornecedores está vazio!');
    }
    echo"<table border='1'>";
        echo"<tr>";
            echo"<td>Fornecedor</td>";
            echo"<td>CNPJ</td>";
            echo"<td>Endereço</td>";
            echo"<td>Cidade</td>";
            echo"<td>Condicoes Pagamento</td>";
            echo"<td>Telefone 1</td>";
            echo"<td>celular</td>";
            echo"<td>E-mail</td>";
            echo"<td>IE</td>";
            echo"<td>Numero</td>";
            echo"<td>Estado</td>";
            echo"<td>Bairro</td>";
            echo"<td>CEP</td>";
            echo"<td>Data cadastro</td>";
            echo"<td>Telefone 2</td>";
            echo"<td>Contato</td>";
            echo"<td>Contrato</td>";
            echo"<td>produto1</td>";
            echo"<td>produto2</td>";
            echo"<td>produto3</td>";
            echo"<td>produto4</td>";
            echo"<td>produto5</td>";
            echo"<td>produto6</td>";
            echo"<td>produto7</td>";
            echo"<td>produto8</td>";
            echo"<td>Observaçao</td>";
            echo"<td colspan='2'>Açoes</td>";    
        echo"</tr>";
        while( $contador < $linhas )
	    {
            $dados = mysqli_fetch_array($registros);
	    	$fornecedor = $dados['fornecedor'];
            $cnpj = $dados['cnpj'];
            $endereco = $dados['endereco'];
            $cidade = $dados['cidade'];
            $condicoes_pagamento = $dados['condicoes_pagamento'];
            $telefone1 = $dados['telefone1'];
            $celular = $dados['celular'];
            $email = $dados['email'];
            $inscricao_estadual = $dados['inscricao_estatual'];
            $numero = $dados['numero'];
            $estado = $dados['estado'];
            $bairro = $dados['bairro'];
            $cep = $dados['cep'];
            $data_cadastro = $dados['data_cadastro'];
            $telefone2 = $dados['telefone2'];
            $contato = $dados['contato'];
            $contrato = $dados['contrato'];
            $produto1 = $dados['produto1']; 
            $produto2 = $dados['produto2'];
            $produto3 = $dados['produto3'];
            $produto4 = $dados['produto4'];
            $produto5 = $dados['produto5'];
            $produto6 = $dados['produto6'];
            $produto7 = $dados['produto7'];
            $produto8 = $dados['produto8'];
            $obs = $dados['obs'];

            echo"<tr>";
                echo"<td>$fornecedor</td>";
                echo"<td>$cnpj</td>";
                echo"<td>$endereco</td>";
                echo"<td>$cidade</td>";
                echo"<td>$condicoes_pagamento</td>";
                echo"<td>$telefone1 1</td>";
                echo"<td>$celular</td>";
                echo"<td>$email</td>";
                echo"<td>$inscricao_estadual</td>";
                echo"<td>$numero</td>";
                echo"<td>$estado</td>";
                echo"<td>$bairro</td>";
                echo"<td>$cep</td>";
                echo"<td>$data_cadastro</td>";
                echo"<td>$telefone2</td>";
                echo"<td>$contato</td>";
                echo"<td>$contrato</td>";
                echo"<td>$produto1</td>";
                echo"<td>$produto2</td>";
                echo"<td>$produto3</td>";
                echo"<td>$produto4</td>";
                echo"<td>$produto5</td>";
                echo"<td>$produto6</td>";
                echo"<td>$produto7</td>";
                echo"<td>$produto8</td>";
                echo"<td>$obs</td>";
                echo"<td><a href='alterarFornecedor.php'>Alterar</a></td>";
                echo"<td><a href='exclusao.php'></a>Excluir</td>";
            echo"</tr>";
	    	$contador++;
        }
    echo"</table>";
?>
