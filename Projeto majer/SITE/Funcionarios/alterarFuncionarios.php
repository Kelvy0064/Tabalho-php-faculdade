<html>
<head>
    
    <title>Cadastro de Funcionários</title>
    <?php
		if(! isset($_GET['c']))
			die("Forma de chamada da rotina de alteração incorreta!!");
	
			$codigo = $_GET['c'];
			
			include "conexao.php";
			
			$sql = "SELECT * FROM cadFuncionarios WHERE id=$codigo";
			
			$registro = mysqli_query($con,$sql);
			
			$linhas = mysqli_num_rows($registro);
			
			if($linhas<1)
			{
				die("Time id: $codigo não existe mais !!");
			}
			
			$dados = mysqli_fetch_array($registro);
			
			$nome 				=$dados['nome'];		
			$log 				=$dados['log'];		
			$endereco 			=$dados['endereco'];		
			$cidade 			=$dados['cidade'];
			$complemento 		=$dados['complemento'];
			$telefone 			=$dados['telefone'];
			$celular 			=$dados['celular'];
			$email 				=$dados['email'];
			$sexo 				=$dados['sexo'];
			$numero 			=$dados['numero'];
			$UF 				=$dados['UF'];
			$estadoCivil 		=$dados['estadoCivil'];
			$bairro 			=$dados['bairro'];
			$cep				=$dados['cep'];
			$nFihos 			=$dados['nFihos'];
			$grauInstrucao 		=$dados['grauInstrucao'];
			$dataNascimento 	=$dados['dataNascimento'];
			$nacionalidade 		=$dados['nacionalidade'];
			$nCarteiraTrabalho 	=$dados['nCarteiraTrabalho'];
			$nPIS 				=$dados['nPIS'];
			$cargo 				=$dados['cargo'];
			$loja 				=$dados['loja'];
			$sCarteiraTrabalho  =$dados['sCarteiraTrabalho'];
			$cpf 				=$dados['cpf'];
			$rg 				=$dados['rg'];
			$admissao			=$dados['admissao'];
	?>
	
	
	<style>
        form{
            padding: 20px;
            width: 50%;
            height: 100%;
            margin: auto;
            background: silver;
        }
        .nome{
            width: 80%
        }
        .primeiro_conteier{
            display: flex;
            background: silver;
            height: 430px;
        }
        .primeiro_conteier1{
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 10px;
            
        }
        .primeiro_conteier2{
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 10px;
        }
        .primeiro_conteier2_conteiner1{
            display: flex;
        }
        .primeiro_conteier2_conteiner1_esquerdo{
            display: flex;
            flex-direction: column;
            width: 50%
        }
        .primeiro_conteier2_conteiner1_direito{
            display: flex;
            flex-direction: column;
            width: 50%;
        }
        .segundo_conteiner{
            background: silver;
            display: flex;
        }
        .segundo_conteiner1{
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 10px;
        }
        .segundo_conteiner2{
            display: flex;
            flex-direction: column;
            width: 50%;
            margin: 10px;
        }
		.envio{
			text-align: center;
		}
    </style>
</head>
<body>
    <form action="gravarFuncionarios.php" enctype="multipart/form-data" method="POST">
        Nome:
        <input  class="nome" type="text" name="nome" placeholder="Nome do Funcionário" maxlength="80" value="<?php echo $nome;?>">
        <div class="primeiro_conteier">
            <div class="primeiro_conteier1">
			
				<?php
					$opcaoA="";
					$opcaoB="";
					$opcaoC="";
					
					if($log="avenida") $opcaoA="selected";
					if($log="chacara") $opcaoB="selected";
					if($log="fazenda") $opcaoC="selected";
				?>
				
                Logradouro:
                <select name="log" maxlength="7">
					<option value="rua">Rua</option>
					<option value="avenida"<?php echo $opcaoA;?>>Avenida</option>
					<option value="chacara"<?php echo $opcaoB;?>>Chácara</option>
					<option value="fazenda"<?php echo $opcaoC;?>>Fazenda</option>
				</select>
				
                Endereço:
                <input type="text" name="endereco" maxlength="80" value="<?php echo $endereco;?>">
                Cidade:
                <input type="text" name="cidade" maxlength="50" value="<?php echo $cidade;?>">
                Complemento:
                <input type="text" name="complemento" maxlength="40" value="<?php echo $complemento;?>">
                Telefone:
                <input type="text" name="telefone" maxlength="10" placeholder="Insira o telefone com DDD" value="<?php echo $telefone;?>">
                Celular:
                <input type="text" name="celular" maxlength="12" placeholder="Insira o Celular com DDD" value="<?php echo $celular;?>">
                E-mail:
                <input type="email" name="email" maxlength="80" value="<?php echo $email;?>">
			<?php
				$checkM="";
				$checkF="";
				
				if ($sexo=="M") $checkM="checked";
				else $checkF="checked";
			?>	
			<fieldset>
			<legend>Sexo:</legend>				
				
				<input type="radio" name="sexo" value="M" <?php echo $checkM;?>>Masculino
				<input type="radio" name="sexo" value="F" <?php echo $checkF;?>>Feminino
			</fieldset>
            </div>
            <div class="primeiro_conteier2">
                
                
					
                <div class="primeiro_conteier2_conteiner1">
                    <div class="primeiro_conteier2_conteiner1_esquerdo">
                        Nº:
                        <input type="number" name="numero" min="1" max="999999" value="<?php echo $numero;?>">
						<?php
							$opcaoAC="";
							$opcaoAL="";
							$opcaoAP="";
							$opcaoAM="";
							$opcaoBA="";
							$opcaoCE="";
							$opcaoDF="";
							$opcaoES="";
							$opcaoGO="";
							$opcaoMA="";
							$opcaoMT="";
							$opcaoMS="";
							$opcaoMG="";
							$opcaoPA="";
							$opcaoPB="";
							$opcaoPR="";
							$opcaoPE="";
							$opcaoPI="";
							$opcaoRJ="";
							$opcaoRN="";
							$opcaoRS="";
							$opcaoRR="";
							$opcaoSC="";
							$opcaoSP="";
							$opcaoSE="";
							$opcaoTO="";
							
						if ($UF=="AC") $opcaoAC="selected";
						if ($UF=="AL") $opcaoAL="selected";
						if ($UF=="AP") $opcaoAP="selected";
						if ($UF=="AM") $opcaoAM="selected";
						if ($UF=="BA") $opcaoBA="selected";
						if ($UF=="CE") $opcaoCE="selected";
						if ($UF=="DF") $opcaoES="selected";
						if ($UF=="GO") $opcaoGO="selected";
						if ($UF=="MA") $opcaoMA="selected";
						if ($UF=="MT") $opcaoMT="selected";
						if ($UF=="MS") $opcaoMS="selected";
						if ($UF=="MG") $opcaoMG="selected";
						if ($UF=="PA") $opcaoPA="selected";
						if ($UF=="PB") $opcaoPB="selected";
						if ($UF=="PR") $opcaoPR="selected";
						if ($UF=="PE") $opcaoPE="selected";
						if ($UF=="PI") $opcaoPI="selected";
						if ($UF=="RJ") $opcaoRJ="selected";
						if ($UF=="RN") $opcaoRN="selected";
						if ($UF=="RS") $opcaoRS="selected";
						if ($UF=="RO") $opcaoRO="selected";
						if ($UF=="RR") $opcaoRR="selected";
						if ($UF=="SC") $opcaoSC="selected";
						if ($UF=="SP") $opcaoSP="selected";
						if ($UF=="SE") $opcaoSE="selected";
						if ($UF=="TO") $opcaoTO="selected";
							
						?>
                        UF:
                        <select name="UF">
                            <option value="AC"<?php echo $opcaoAC; ?>>Acre (AC)</option>
                            <option value="AL"<?php echo $opcaoAL; ?>>Alagoas (AL)</option>
                            <option value="AP"<?php echo $opcaoAP; ?>>Amapá (AP)</option>
                            <option value="AM"<?php echo $opcaoAM; ?>>Amazonas (AM)</option>
                            <option value="BA"<?php echo $opcaoBA; ?>>Bahia (BA)</option>
                            <option value="CE"<?php echo $opcaoCE; ?>>Ceará (CE)</option>
                            <option value="DF"<?php echo $opcaoDF; ?>>Distrito Federal (DF)</option>
                            <option value="ES"<?php echo $opcaoES; ?>>Espirito Santo (ES)</option>
                            <option value="GO"<?php echo $opcaoGO; ?>>Goiás (GO)</option>
                            <option value="MA"<?php echo $opcaoMA; ?>>Maranhão (MA)</option>
                            <option value="MT"<?php echo $opcaoMT; ?>>Mato Grosso (MT)</option>
                            <option value="MS"<?php echo $opcaoMS; ?>>Mato Grosso do Sul (MS)</option>
                            <option value="MG"<?php echo $opcaoMG; ?>>Minas Gerais (MG)</option>
                            <option value="PA"<?php echo $opcaoPA; ?>>Pará (PA)</option>
                            <option value="PB"<?php echo $opcaoPB; ?>>Paraíba (PB)</option>
                            <option value="PR"<?php echo $opcaoPR; ?>>Paraná (PR)</option>
                            <option value="PE"<?php echo $opcaoPE; ?>>Pernambuco (PE)</option>
                            <option value="PI"<?php echo $opcaoPI; ?>>Piauí­ (PI)</option>
                            <option value="RJ"<?php echo $opcaoRJ; ?>>Rio de Janeiro (RJ)</option>
                            <option value="RN"<?php echo $opcaoRN; ?>>Rio Grande do Norte (RN)</option>
                            <option value="RS"<?php echo $opcaoRS; ?>>Rio Grande do Sul (RS)</option>
                            <option value="RO"<?php echo $opcaoRO; ?>>Rondônia (RO)</option>
                            <option value="RR"<?php echo $opcaoRR; ?>>Roraima (RR)</option>
                            <option value="SC"<?php echo $opcaoSC; ?>>Santa Catarina (SC)</option>
                            <option value="SP"<?php echo $opcaoSP; ?>>São Paulo (SP)</option>
                            <option value="SE"<?php echo $opcaoSE; ?>>Sergipe (SE)</option>
                            <option value="TO"<?php echo $opcaoTO; ?>>Tocantins (TO)</option>
                        </select>
						
						<?php
							$opcaoS="";
							$opcaoC="";
							$opcaoV="";
							$opcaoD="";
							
							if($estadoCivil=="s") $opcaoS="selected";
							if($estadoCivil=="c") $opcaoC="selected";
							if($estadoCivil=="v") $opcaoV="selected";
							if($estadoCivil=="d") $opcaoD="selected";
						?>
				Estado Civíl:
				<select name="estadoCivil">
					<option value="s"<?php echo $opcaoS;?>>Solteiro(a)</option>
					<option value="c"<?php echo $opcaoC;?>>Casado(a)</option>
					<option value="v(a)"<?php echo $opcaoV;?>>Viúvo(a)</option>
					<option value="d"<?php echo $opcaoD;?>>Divorciado(a)</option>
				</select>
                    </div>
                    <div class="primeiro_conteier2_conteiner1_direito">
                        Bairro:
                        <input type="text" name="bairro" maxlength="50" value="<?php echo $bairro;?>">
                        CEP:
                        <input type="text" name="cep" maxlength="8" value="<?php echo $cep;?>">
				Número de Filhos:
				<input type="number" name="nFihos" maxlength="2" max="99" min="0" value="<?php echo $nFihos; ?>">
                    </div>
                </div>
				
				<?php
					$opcaoA="";
					$opcaoEFI="";
					$opcaoEFC="";
					$opcaoEMI="";
					$opcaoEMC="";
					$opcaoSC="";
					$opcaoPG="";
					$opcaoM="";
					$opcaoD="";
					$opcaoPD="";
					
					if($grauInstrucao=="analfabeto") $opcaoA="selected";
					if($grauInstrucao=="ensinoFundamentalInc") $opcaoEFI="selected";
					if($grauInstrucao=="ensinoFundamentalCom") $opcaoEFC="selected";
					if($grauInstrucao=="ensinoMedioInc") $opcaoEMI="selected";
					if($grauInstrucao=="ensinoMedioCom") $opcaoEMC="selected";
					if($grauInstrucao=="superior") $opcaoSC="selected";
					if($grauInstrucao=="posGraduacao") $opcaoPG="selected";
					if($grauInstrucao=="mestrado") $opcaoM="selected";
					if($grauInstrucao=="doutorado") $opcaoD="selected";
					if($grauInstrucao=="posDoutorado") $opcaoPD="selected";
				?>
				Grau de Instrução:
				<select name="grauInstrucao">
					<option value="analfabeto"<?php echo $opcaoA;?>>Analfabeto</option>
					<option value="ensinoFundamentalInc"<?php echo $opcaoEFI;?>>Ensino fundamental incompleto</option>
					<option value="ensinoFundamentalCom"<?php echo $opcaoEFC;?>>Ensino fundamental completo</option>
					<option value="ensinoMedioInc"<?php echo $opcaoEMI;?>>Ensino médio incompleto</option>
					<option value="ensinoMedioCom"<?php echo $opcaoEMC;?>>Ensino médio completo</option>
					<option value="superior"<?php echo $opcaoSC;?>>Superior completo</option>
					<option value="posGraduacao"<?php echo $opcaoPG;?>>Pós-Graduação</option>
					<option value="mestrado"<?php echo $opcaoM;?>>Mestrado</option>
					<option value="doutorado"<?php echo $opcaoD;?>>Doutorado</option>
					<option value="posDoutorado"<?php echo $opcaoPD;?>>Pós-Doutorado</option>
				</select>
				
                Data de Nascimento:
                <input type="date" name="dataNascimento" value="<?php echo $dataNascimento ;?>"> 
                Foto:
                <input type="file" name="foto">
				<?php
					$checkB="";
					$checkE="";
					
					if($nacionalidade=="B") $checkB="checked";
					if($nacionalidade=="E") $checkE="checked";
				?>
				
			<fieldset>
				<legend>Nacionalidade:</legend>				
				<input type="radio" name="nacionalidade" value="B" <?php echo $checkB;?>>Brasileiro(a)
				<input type="radio" name="nacionalidade" value="E" <?php echo $checkE;?>>Estrangeiro(a)
			</fieldset>
				
            </div>
        </div>
        <div class="segundo_conteiner">
            <div class="segundo_conteiner1">
                Número Carteira de Trabalho:
				<input type="text" name="nCarteiraTrabalho" maxlength="6" value="<?php echo $nCarteiraTrabalho;?>">
				Número PIS:
				<input type="text" name="nPIS" maxlength="11" value="<?php echo $nPIS;?>">
				<?php
					$opcaoA="";
					$opcaoB="";
					$opcaoC="";
					
					if($cargo=="A") $opcaoA="selected";
					if($cargo=="B") $opcaoB="selected";
					if($cargo=="C") $opcaoC="selected";

				?>
				Cargo:	<select name="cargo">
						<option value="">Escolha</option>
						<option value="A" <?php echo $opcaoA;?>>Opção A</option>
						<option value="B" <?php echo $opcaoB;?>>Opção B</option>
						<option value="C" <?php echo $opcaoC;?>>Opção C</option>
					</select>
				<?php
					$opcaoA="";
					$opcaoB="";
					$opcaoC="";
					
					if($loja=="A") $opcaoA="selected";
					if($loja=="B") $opcaoB="selected";
					if($loja=="C") $opcaoC="selected";

				?>
					
				Loja:<select name="loja">
						<option value="">Escolha</option>
						<option value="A" <?php echo $opcaoA;?>>Opção A</option>
						<option value="B" <?php echo $opcaoB;?>>Opção B</option>
						<option value="C" <?php echo $opcaoC;?>>Opção C</option>
					</select>
				
            </div>
            <div class="segundo_conteiner2">
                Série:
                <input type="text" name="sCarteiraTrabalho" maxlength="5" value="<?php echo $sCarteiraTrabalho;?>">
                CPF:
                <input type="text" name="cpf" maxlength="11" value="<?php echo $cpf;?>">
                RG:
                <input type="text" name="rg" maxlength="9" value="<?php echo $rg;?>">
                Admissão: <input type="date" name="admissao" value="<?php echo $admissao;?>">
            </div>
        </div>
		<div class="envio">
        <input type="submit" value="Alterar">
		<input type="reset" value="Limpar Dados">
		</div>
    </form>
</body>
</html>