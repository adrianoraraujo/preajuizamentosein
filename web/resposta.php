<?php
$resposta=$_GET["resposta"];
$uf=$_GET["estado"];
$pesqbens=$_GET["resp1"];
$data=$_GET["data"];
$resposta1='Prescrição em até 2 meses
	Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: AJUIZAR EXECUÇÃO FISCAL (SECRETARIA JUDICIÁRIA)
 URGENTE: SIM
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE AJUIZAMENTO DE URGÊNCIA (PRESCRIÇÃO EM ATÉ 2 MESES E EXECUÇÃO PRIORITÁRIA) (ENAC)
PRAZO:
 PRAZO: 1 DIA
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 2';
 $resposta2='Prescrição em até 12 meses, valor da dívida acima de R$5.000
		Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: AJUIZAR EXECUÇÃO FISCAL (SECRETARIA JUDICIÁRIA)
 URGENTE: SIM
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE AJUIZAMENTO DE EXECUÇÃO FISCAL (ENAC)
PRAZO:
 PRAZO: 5 DIAS
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 2';
 $resposta3='Prescrição acima de 12 meses, valor da dívida acima de R$5.000
		Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: AJUIZAR EXECUÇÃO FISCAL (SECRETARIA JUDICIÁRIA)
 URGENTE: NÃO
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE AJUIZAMENTO DE EXECUÇÃO FISCAL (ENAC)
PRAZO:
 PRAZO: 30 DIAS
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 2';
 $resposta4='Prescrição em até 12 meses, valor da dívida até R$5.000, Localizado bens
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: AJUIZAR EXECUÇÃO FISCAL (SECRETARIA JUDICIÁRIA)
 URGENTE: SIM
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE AJUIZAMENTO DE EXECUÇÃO FISCAL (ENAC)
PRAZO:
 PRAZO: 5 DIAS
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 1';
 $resposta5='Prescrição acima de 12 meses, valor da dívida até R$5.000, Localizado bens
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: AJUIZAR EXECUÇÃO FISCAL (SECRETARIA JUDICIÁRIA)
 URGENTE: NÃO
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE AJUIZAMENTO DE EXECUÇÃO FISCAL (ENAC)
PRAZO:
 PRAZO: 30 DIAS
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 1';
 $resposta6='Prescrição em até 12 meses, valor da dívida até R$5.000, Não localizado bens, Todas as autarquias (exceto: IBAMA e INMETRO)
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: AJUIZAR EXECUÇÃO FISCAL (SECRETARIA JUDICIÁRIA)
 URGENTE: SIM
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE AJUIZAMENTO DE EXECUÇÃO FISCAL (ENAC)
PRAZO:
 PRAZO: 5 DIAS
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 3';
 $resposta7='Prescrição acima de 12 meses, valor da dívida até R$5.000, Não localizado bens, Todas as autarquias (exceto: IBAMA e INMETRO)
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: AJUIZAR EXECUÇÃO FISCAL (SECRETARIA JUDICIÁRIA)
 URGENTE: NÃO
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE AJUIZAMENTO DE EXECUÇÃO FISCAL (ENAC)
PRAZO:
 PRAZO: 30 DIAS
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 3';
 $resposta8='Prescrição em até 12 meses, valor da dívida até R$5.000, Não localizado bens, IBAMA OU INMETRO, Já protestado
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: EXPEDIR PROCESSO/DOCUMENTO AO DESTINATÁRIO INDICADO (ADMINISTRATIVO)
 URGENTE: SIM
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE CONCILIAÇÃO PRÉVIA (ENAC)
PRAZO:
 PRAZO: 5 DIAS
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 4';
 $resposta9='Prescrição acima de 12 meses, valor da dívida até R$5.000, Não localizado bens, IBAMA OU INMETRO, Já protestado
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: EXPEDIR PROCESSO/DOCUMENTO AO DESTINATÁRIO INDICADO (ADMINISTRATIVO)
 URGENTE: NÃO
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE CONCILIAÇÃO PRÉVIA (ENAC)
PRAZO:
 PRAZO: 30 DIAS
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 4';
 $resposta10='Prescrição em até 12 meses, valor da dívida até R$5.000, Não localizado bens, IBAMA OU INMETRO, Não protestado e município não esta apto para protesto
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: AJUIZAR EXECUÇÃO FISCAL (SECRETARIA JUDICIÁRIA)
 URGENTE: SIM
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE AJUIZAMENTO DE EXECUÇÃO FISCAL (ENAC)
PRAZO:
 PRAZO: 5 DIAS
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 6';
 $resposta11='Prescrição acima de 12 meses, valor da dívida até R$5.000, Não localizado bens, IBAMA OU INMETRO, Não protestado e município não esta apto para protesto
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: AJUIZAR EXECUÇÃO FISCAL (SECRETARIA JUDICIÁRIA)
 URGENTE: NÃO
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE AJUIZAMENTO DE EXECUÇÃO FISCAL (ENAC)
PRAZO:
 PRAZO: 30 DIAS
 OBSERVAÇÃO:
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 6';
 $resposta12='Prescrição em até 12 meses, valor da dívida até R$5.000, Não localizado bens, IBAMA OU INMETRO, Não protestado e município apto para protesto
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: ADOTAR PROVIDÊNCIAS ADMINISTRATIVAS (ADMINISTRATIVO)
 URGENTE: SIM
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SUBNÚCLEO DE VERIFICAÇÃO DE RESULTADO E SANEAMENTO DE IRREGULARIDADE DO PROTESTO (ENAC)
PRAZO:
 PRAZO: 5 DIAS
 OBSERVAÇÃO:
VERIFICAÇÃO DE PROTESTO: ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 5';
 $resposta13='Prescrição acima de 12 meses, valor da dívida até R$5.000, Não localizado bens, IBAMA OU INMETRO, Não protestado e município apto para protesto
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: ADOTAR PROVIDÊNCIAS ADMINISTRATIVAS (ADMINISTRATIVO)
 URGENTE: NÃO
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SUBNÚCLEO DE VERIFICAÇÃO DE RESULTADO E SANEAMENTO DE IRREGULARIDADE DO PROTESTO (ENAC)
PRAZO:
 PRAZO: 30 DIAS
 OBSERVAÇÃO:
VERIFICAÇÃO DE PROTESTO: ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DIAS DE PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 5';
 if($resposta==2){
 $resposta= $resposta2;}
 else if($resposta==1){
 $resposta= $resposta1;}
 else if($resposta==3){
 $resposta= $resposta3;}
 else if($resposta==4){
 $resposta= $resposta4;}
 else if($resposta==5){
 $resposta= $resposta5;}
 else if($resposta==6){
 $resposta= $resposta6;}
 else if($resposta==7){
 $resposta= $resposta7;}
 else if($resposta==8){
 $resposta= $resposta8;}
 else if($resposta==9){
 $resposta= $resposta9;}
 else if($resposta==10){
 $resposta= $resposta10;}
 else if($resposta==11){
 $resposta= $resposta11;}
 else if($resposta==12){
 $resposta= $resposta12;}
 else if($resposta==13){
 $resposta= $resposta13;}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<div align= "center"><strong>
<div><img src="brasao_pb1.gif" alt="Brasão das Armas" title="Brasão das Armas" /></div>
<div>ADVOCACIA-GERAL DA UNIÃO</div>
<div>PROCURADORIA-GERAL FEDERAL</div>
<div>EQUIPE NACIONAL DE COBRANÇA</div>
<div>DIVISÃO DE INTELIGÊNCIA - ENAC DIN</div></strong></div>

  <meta charset="UTF-8">
    <title>Pré-Ajuizamento SEIN</title>
     <!-- chama o arquivo css externo
    <link rel="stylesheet" type="text/css"  href="estilo.css" /> -->
</head>
<body><strong><p></p><p></p>
<div>Resposta:</div>
<p></p><p></p>
<div class="textarea-example">
   
    <div>
        <label for="advanced"></label>
        <textarea id="advanced" name="advanced"
                  rows="30" cols="70" maxlength="400"
                  wrap="hard">
<?=$resposta?>
        </textarea>
    </div>
</div>

<form action="index.php" method="POST">
<input type="submit" value="Voltar"> 
</form>
<!--
<span class="control-copytextarea" onClick="return fieldtoclipboard.copyfield(event, 'select1')">Copiar</span><br>
<textarea id="select1" name="select1" rows=30 cols=200>
<?=$resposta?>
</textarea>
<script src="fieldtoclipboard.js">
</script>
-->
</body>
</html>