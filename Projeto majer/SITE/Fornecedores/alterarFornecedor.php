<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastro de fornecedores</title>
        <style>
            form{
                padding: 20px;
                width: 50%;
                height: 100%;
                margin: auto;
                background: silver;
            }
            .fornecedor{
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

        </style>
    </head>
    <body>
    <?php
        if(! isset($_GET['c']))
        {
            die("Forma de chamada da rotina de altera��o incorreta!");
        }
        $codigo = $_GET['c']; 
        include "conexao.php";
        $sql = "SELECT * FROM Fornecedores WHERE id=$codigo";
        $registro = mysqli_query($con, $sql);
        $linhas = mysqli_num_rows($registro);
        if($linhas <1)
        {
        	die("esse cadastro n�o existe mais!!");
        }
        $dados = mysqli_fetch_array($registro);
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
    ?>    
        <form action="garavarFornecedor.php" enctype="multipart/form-data" method="POST">
            Fornecedor:
            <input  class="fornecedor" type="text" name="fornecedor" value=<?php echo $fornecedor;?>>
            <div class="primeiro_conteier">
                <div class="primeiro_conteier1">
                    CNPJ:
                    <input type="text" name="cnpj" value=<?php echo $cnpj;?>>
                    Endereço:
                    <input type="text" name="endereco" value=<?php echo $endereco;?>>
                    Cidade:
                    <input type="text" name="cidade" value=<?php echo $cidade;?>>
                    Condicoes pagamento:
                    <input type="text" name="condicoes_pagamento" value=<?php echo $condicoes_pagamento;?>>
                    Telefone 1:
                    <input type="number" name="telefone1" value=<?php echo $telefone1;?>>
                    Celular:
                    <input type="text" name="celular" value=<?php echo $celular;?>>
                    E-mail:
                    <input type="email" name="email" value=<?php echo $email;?>>
                </div>
                <div class="primeiro_conteier2">
                    Inscrição estadual:
                    <input type="number" name="inscricao_estadual" value=<?php echo $inscricao_estadual;?>>
                    <div class="primeiro_conteier2_conteiner1">
                        <div class="primeiro_conteier2_conteiner1_esquerdo">
                            Nº:
                            <input type="number" name="numero" value=<?php echo $numero;?>>
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
                        <select name="estado">
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
                        </div>
                        <div class="primeiro_conteier2_conteiner1_direito">
                            Bairro:
                            <input type="text" name="bairro" value=<?php echo $bairro;?>>
                            CEP:
                            <input type="text" name="cep" value=<?php echo $cep;?>>
                        </div>
                    </div>
                    Data:
                    <input type="date" name="data_cadastro" value=<?php echo $data_cadastro;?>>
                    Telefone 2:
                    <input type="number" name="telefone2" value=<?php echo $telefone2;?>>
                    Contato:
                    <input type="text" name="contato" value=<?php echo $contato;?>>
                    Contrato:
                    <input type="file" name="contrato" value=<?php echo $contrato;?>>
                </div>
            </div>
            <div class="segundo_conteiner">
                <div class="segundo_conteiner1">
                    produto - 1 
                    <input type="text" name="produto1" value=<?php echo $produto1;?>>
                    produto - 2 
                    <input type="text" name="produto2" value=<?php echo $produto2;?>>
                    produto - 3 
                    <input type="text" name="produto3" value=<?php echo $produto3;?>>
                    produto - 4 
                    <input type="text" name="produto4" value=<?php echo $produto4;?>>
                </div>
                <div class="segundo_conteiner2">
                    produto - 5 
                    <input type="text" name="produto5" value=<?php echo $produto5;?>>
                    produto - 6 
                    <input type="text" name="produto6" value=<?php echo $produto6;?>>
                    produto - 7 
                    <input type="text" name="produto7" value=<?php echo $produto7;?>>
                    produto - 8 
                    <input type="text" name="produto8" value=<?php echo $produto8;?>>
                </div>
            </div>
            Observação:<br>
            <textarea name="obs" cols="100" rows="10" value=<?php echo $obs;?>></textarea><br>
        </form>
    </body>
</html>