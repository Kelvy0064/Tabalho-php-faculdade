<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="cadastro de paciente.css" type="text/css"> 
    <title>Cadastro de pacientes</title>
</head>
<body>
<?php
    if(! isset($_GET['c']))
    {
        die("Forma de chamada da rotina de altera��o incorreta!");
    }
	$codigo = $_GET['c'];	
	include "conexao.php";
	$sql = "SELECT * FROM times WHERE id=$codigo";
	$registro = mysqli_query($con, $sql);
	$linhas = mysqli_num_rows($registro);			
    if($linhas <1)
    {
	    die("Paciente id: $codigo n�o existe mais!!");
    }
    $dados = mysqli_fetch_array($registro);
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
?>
    <form action="gravarPaciente.php" enctype="multipart/form-data" method="POST">
        <h3>Cadastro de paciente</h3><br>
        <div class="containerPai">
            <div class="container1">
                Nome:<br>
                <input type="text" class="inputPadrao" name="nome" value=<?php echo $nome;?>><br>
                E-mail:<br>
                <input name="email" class="inputPadrao" type="email" value=<?php echo $email;?>><br>
                Endereço:<br>
                <input type="text" class="inputPadrao" name="endereco" value=<?php echo $endereco;?>><br>
                Bairro:<br>
                <input type="text" class="inputPadrao" name="bairro" value=<?php echo $bairro;?>><br>
                Estado:<br>
                <?php
                $opcao_acre ="";
                $opcao_alagoas ="";
                $opcao_amapa ="";
                $opcao_amazonas ="";
                $opcao_bahia ="";
                $opcao_ceara ="";
                $opcao_distrito ="";
                $opcao_espirito ="";
                $opcao_goias ="";
                $opcao_maranhao ="";
                $opcao_matoGrosso ="";
                $opcao_matoSul ="";
                $opcao_minas ="";
                $opcao_para ="";
                $opcao_paraiba ="";
                $opcao_parana ="";
                $opcao_pernambunco ="";
                $opcao_piaui ="";
                $opcao_rio ="";
                $opcao_rioGrandeNorte ="";
                $opcao_rioGrandeSul ="";
                $opcao_rondonia ="";
                $opcao_roraima ="";
                $opcao_santaCatarina ="";
                $opcao_saoPaulo ="";
                $opcao_sergipe ="";
                $opcao_tocantins ="";
                if($estado=="acre")       
                    $opcao_acre = "selected";
                if($estado=="alagoas")              
                    $opcao_alagoas = "selected";
                if($estado=="amapa")                
                    $opcao_amapa = "selected";
                if($estado=="amazonas")             
                    $opcao_amazonas = "selected";
                if($estado=="bahia")                
                    $opcao_bahia = "selected";
                if($estado=="ceara")                
                    $opcao_ceara = "selected";
                if($estado=="distrito")             
                    $opcao_distrito = "selected";
                if($estado=="espirito")             
                    $opcao_espirito = "selected";
                if($estado=="goias")                
                    $opcao_goias = "selected";
                if($estado=="maranhao")             
                    $opcao_maranhao = "selected";
                if($estado=="matoGrosso")               
                    $opcao_matoGrosso = "selected";
                if($estado=="matoSul")              
                    $opcao_matoSul = "selected";
                if($estado=="minas")                
                    $opcao_minas = "selected";
                if($estado=="para")             
                    $opcao_para = "selected";
                if($estado=="paraiba")              
                    $opcao_paraiba = "selected";
                if($estado=="parana")               
                    $opcao_parana = "selected";
                if($estado=="pernambunco")              
                    $opcao_pernambunco = "selected";
                if($estado=="piaui")                
                    $opcao_piaui = "selected";
                if($estado=="rio")              
                    $opcao_rio = "selected";
                if($estado=="rioGrandeNorte")               
                    $opcao_rioGrandeNorte = "selected";
                if($estado=="rioGrandeSul")             
                    $opcao_rioGrandeSul = "selected";
                if($estado=="rondonia")             
                    $opcao_rondonia = "selected";
                if($estado=="roraima")              
                    $opcao_roraima = "selected";
                if($estado=="santaCatarina")                
                    $opcao_santaCatarina = "selected";
                if($estado=="saoPaulo")             
                    $opcao_saoPaulo = "selected";
                if($estado=="sergipe")              
                    $opcao_sergipe = "selected";
                if($estado=="tocantins")                
                    $opcao_tocantins = "selected";
                ?>
                <select name="estado" class="inputPadrao selectUF">
                    <option value="acre" <?php echo $opcao_acre?>>Acre (AC)</option>
                    <option value="alagoas" <?php echo $opcao_alagoas?>>Alagoas (AL)</option>
                    <option value="amapa" <?php echo $opcao_amapa?>>Amapá (AP)</option>
                    <option value="amazonas" <?php echo $opcao_amazonas?>>Amazonas (AM)</option>
                    <option value="bahia" <?php echo $opcao_bahia?>>Bahia (BA)</option>
                    <option value="ceara" <?php echo $opcao_ceara?>>Ceará (CE)</option>
                    <option value="distrito" <?php echo $opcao_distrito?>>Distrito Federal (DF)</option>
                    <option value="espirito" <?php echo $opcao_espirito?>>Espírito Santo (ES)</option>
                    <option value="goias" <?php echo $opcao_goias?>>Goiás (GO)</option>
                    <option value="maranhao" <?php echo $opcao_maranhao?>>Maranhão (MA)</option>
                    <option value="matoGrosso" <?php echo $opcao_matoGrosso?>>Mato Grosso (MT)</option>
                    <option value="matoSul" <?php echo $opcao_matoSul?>>Mato Grosso do Sul (MS)</option>
                    <option value="minas" <?php echo $opcao_minas?>>Minas Gerais (MG)</option>
                    <option value="para" <?php echo $opcao_para?>>Pará (PA)</option>
                    <option value="paraiba" <?php echo $opcao_paraiba?>>Paraíba (PB)</option>
                    <option value="parana" <?php echo $opcao_parana?>>Paraná (PR)</option>
                    <option value="pernambunco" <?php echo $opcao_pernambunco?>>Pernambuco (PE)</option>
                    <option value="piaui" <?php echo $opcao_piaui?>>Piauí (PI)</option>
                    <option value="rio" <?php echo $opcao_rio?>>Rio de Janeiro (RJ)</option>
                    <option value="rioGrandeNorte" <?php echo $opcao_rioGrandeNorte?>>Rio Grande do Norte (RN)</option>
                    <option value="rioGrandeSul" <?php echo $opcao_rioGrandeSul?>>Rio Grande do Sul (RS)</option>
                    <option value="rondonia" <?php echo $opcao_rondonia?>>Rondônia (RO)</option>
                    <option value="roraima" <?php echo $opcao_roraima?>>Roraima (RR)</option>
                    <option value="santaCatarina" <?php echo $opcao_santaCatarina?>>Santa Catarina (SC)</option>
                    <option value="saoPaulo" <?php echo $opcao_saoPaulo?>>São Paulo (SP)</option>
                    <option value="sergipe" <?php echo $opcao_sergipe?>>Sergipe (SE)</option>
                    <option value="tocantins" <?php echo $opcao_tocantins?>>Tocantins (TO)</option>
                </select><br>
                Telefone:<br>
                <input name="telefone" type="number" value=<?php echo $telefone;?>><br>
            </div>
            <div class="container2">
                Celular:<br>
                <input name="celular" type="number" value=<?php echo $celular;?>><br>
                RG:<br>
                <input name="rg" type="number" value=<?php echo $rg;?>><br>
                CPF:<br>
                <input name="cpf" type="number" value=<?php echo $cpf;?>><br>
                Data de nascimento<br>
                <input name="dataNascimento" type="date" value=<?php echo $dataNascimento;?>><br>
                Convênio:<br>
                <input type="radio" name="convenio" value=<?php echo $convenio;?> checked="">Sim
                <input type="radio" name="convenio" value=<?php echo $convenio;?>>Nao<br>
                Foto paciente:
                <input type="file" value=<?php echo $fotoPaciente;?>><br>
            </div>
        </div>
        <div class="container3">
            Observação:<br>
            <textarea name="obs" cols="100" rows="10" value=<?php echo $observacao;?>></textarea><br>
            <input type="submit" value="Cadastrar" class="botoesBaixo btCadastro">
            <button class="botoesBaixo"><a href="listagem.php">Cancelar</a></button>
        </div>
    </form>
</body>
</html>