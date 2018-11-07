<?php
$resposta=$_POST["resposta"];
$uf=$_POST["estado"];
$pesqbens=$_POST["resp1"];
$protestado=$_POST["resp3"];
$data=$_POST["data"];
$autarquia=$_POST["autarquia"];
$valor=$_POST["valor"];
$nup=$_POST["nup"];
$nome=$_POST["nome"];
$snome=$_POST["snome"];
$pesq=$_POST["pesq"];
$filiais=$_POST["filiais"];
$cart=$_POST["cart"];
$infoseg=$_POST["infoseg"];
$seq=$_POST["seq"];
$outros=$_POST["outros"];
$servidor=$_POST["servidor"];
$filial=$_POST["filial"];
$textoad=" ";
if($autarquia=="on")
	$autarquia=$outros;
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
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 7';
 $certidao1='Certifico que a equipe SEIN – ENAC realizou as pesquisas certificadas acima.
Entretanto, considerando a urgência do prazo prescricional a se expirar nos próximos 60
dias, conforme atestado em lembrete do NUP originário, encaminhe-se o crédito ao SETOR DE
AJUIZAMENTO DE URGÊNCIA (PRESCRIÇÃO EM ATÉ 2 MESES E EXECUÇÃO PRIORITÁRIA) da ENAC para as
providências cabíveis.';
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
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 2';
  $certidao2='Certifico que a equipe SEIN – ENAC realizou as pesquisas patrimoniais acima especificadas
não encontrando resultados positivos nesta data.
Entretanto, considerando que o valor da CDA supera R$ 5.000,00 (cinco mil reais), não é
aplicada à hipótese o art. 8º, § 1º, da Portaria PGF 688/2016.
Nestes termos, encaminhe-se o crédito ao Setor de Ajuizamento para prosseguimento.';
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
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 2';
  $certidao3='Certifico que a equipe SEIN – ENAC realizou as pesquisas patrimoniais acima especificadas
não encontrando resultados positivos nesta data.
Entretanto, considerando que o valor da CDA supera R$ 5.000,00 (cinco mil reais), não é
aplicada à hipótese o art. 8º, § 1º, da Portaria PGF 688/2016.
Nestes termos, encaminhe-se o crédito ao Setor de Ajuizamento para prosseguimento.';
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
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 1';
 $certidao4='Pelo exposto, diante da existência de bens previamente localizados por meio das pesquisas
patrimoniais acima especificadas, certifica-se POSITIVAMENTE a probabilidade de satisfação judicial do
crédito.
Nestes termos, ao Setor de Ajuizamento para prosseguimento.';
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
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 1';
 $certidao5='Pelo exposto, diante da existência de bens previamente localizados por meio das pesquisas
patrimoniais acima especificadas, certifica-se POSITIVAMENTE a probabilidade de satisfação judicial do
crédito.
Nestes termos, ao Setor de Ajuizamento para prosseguimento.';
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
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 3';
 $certidao6='Certifico que a equipe SEIN – ENAC realizou as pesquisas patrimoniais acima especificadas
não encontrando resultados positivos nesta data.
Entretanto, considerando que a entidade credora não se encontra apta à realização do
protesto extrajudicial do crédito na presente data, nos termos exigidos pelo art. 8º, § 1º, da Portaria PGF
688/2016 c/c art. 3º, caput, e § 2º, Portaria AGU 377/2011, encaminhe-se o NUP administrativo originário
ao Setor de Ajuizamento da ENAC para ajuizamento da Execução Fiscal.';
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
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 3';
 $certidao7='Certifico que a equipe SEIN – ENAC realizou as pesquisas patrimoniais acima especificadas
não encontrando resultados positivos nesta data.
Entretanto, considerando que a entidade credora não se encontra apta à realização do
protesto extrajudicial do crédito na presente data, nos termos exigidos pelo art. 8º, § 1º, da Portaria PGF
688/2016 c/c art. 3º, caput, e § 2º, Portaria AGU 377/2011, encaminhe-se o NUP administrativo originário
ao Setor de Ajuizamento da ENAC para ajuizamento da Execução Fiscal.';
 $resposta8='Prescrição em até 12 meses, valor da dívida até R$5.000, Não localizado bens, IBAMA OU INMETRO, Já protestado
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: ADOTAR PROVIDÊNCIAS ADMINISTRATIVAS (ADMINISTRATIVO)
 URGENTE: SIM
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE CONTROLE DE PAGAMENTO (ENAC)
PRAZO:
 PRAZO: 5 DIAS
 OBSERVAÇÃO:PESQUISA NEGATIVA PRÉ AJUIZAMENTO, VERIFICAR VALOR CONSOLIDADO
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 4';
 $certidao8='Certifico que a equipe SEIN – ENAC realizou as pesquisas patrimoniais acima especificadas
não encontrando resultados positivos nesta data, estando o crédito devidamente protestado
conforme atestado acima.
Assim, nos termos do art. 4º, da Ordem de Serviço CGCOB n° 02/2018 c/c art 8º, §1º, da
Portaria PGF 688/2016, e art. 3º, caput, e §2°, da Portaria AGU 377/2011, encaminhe-se o crédito ao
Setor de Controle de pagamento para conferência do valor consolidado dos créditos do devedor e
demais providências daí decorrentes.';
 $resposta9='Prescrição acima de 12 meses, valor da dívida até R$5.000, Não localizado bens, IBAMA OU INMETRO, Já protestado
Abrir Tarefa, conforme informações abaixo:
 Conforme passo-a-passo em: Rotinas Básicas Gerais: 10) Abrir Tarefa
TAREFA:
 ESPÉCIE: ADOTAR PROVIDÊNCIAS ADMINISTRATIVAS (ADMINISTRATIVO)
 URGENTE: NÃO
RESPONSÁVEL:
 DISTRIBUIÇÃO: AUTOMÁTICA
 SETOR: SETOR DE CONTROLE DE PAGAMENTO (ENAC)
PRAZO:
 PRAZO: 30 DIAS
 OBSERVAÇÃO:PESQUISA NEGATIVA PRÉ AJUIZAMENTO, VERIFICAR VALOR CONSOLIDADO
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 4';
 $certidao9='Certifico que a equipe SEIN – ENAC realizou as pesquisas patrimoniais acima especificadas
não encontrando resultados positivos nesta data, estando o crédito devidamente protestado
conforme atestado acima.
Assim, nos termos do art. 4º, da Ordem de Serviço CGCOB n° 02/2018 c/c art 8º, §1º, da
Portaria PGF 688/2016, e art. 3º, caput, e §2°, da Portaria AGU 377/2011, encaminhe-se o crédito ao
Setor de Controle de pagamento para conferência do valor consolidado dos créditos do devedor e
demais providências daí decorrentes.';
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
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 6';
 $certidao10='Certifico que a equipe SEIN – ENAC realizou as pesquisas patrimoniais acima especificadas
não encontrando resultados positivos nesta data.
Entretanto, considerando que o município de domicílio do devedor não se encontra
homologado para a realização do protesto extrajudicial do crédito na presente data, nos termos exigidos
pelo art. 8º, § 1º, da Portaria PGF 688/2016 c/c art. 3º, caput, e § 2º, Portaria AGU 377/2011, encaminhese
o NUP administrativo originário ao Setor de Ajuizamento da ENAC para ajuizamento da Execução
Fiscal.';
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
ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 6';
 $certidao11='Certifico que a equipe SEIN – ENAC realizou as pesquisas patrimoniais acima especificadas
não encontrando resultados positivos nesta data.
Entretanto, considerando que o município de domicílio do devedor não se encontra
homologado para a realização do protesto extrajudicial do crédito na presente data, nos termos exigidos
pelo art. 8º, § 1º, da Portaria PGF 688/2016 c/c art. 3º, caput, e § 2º, Portaria AGU 377/2011, encaminhese
o NUP administrativo originário ao Setor de Ajuizamento da ENAC para ajuizamento da Execução
Fiscal.';
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
VERIFICAÇÃO DE PROTESTO: ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 5';
 $certidao12='Certifico que a equipe SEIN – ENAC realizou as pesquisas patrimoniais acima especificadas
não encontrando resultados positivos nesta data.
Certifico, ainda, que não foi encontrado no processo despacho/tela que comprove o efetivo
protesto da dívida.
Dessa forma, diante da inexistência de bens nas pesquisas acima apontadas, há remota
possibilidade de satisfação judicial do crédito, não se justificando a movimentação do Poder Judiciário e
órgãos administrativos competentes por meio do processo judicial de execução fiscal, acaso viável a
cobrança extrajudicial do crédito.
Assim, nos termos autorizados pelo art. 4º, da Ordem de Serviço CGCOB n° 02/2018 c/c art
8º, §1º, da Portaria PGF 688/2016, e art. 3º, caput, e §2°, da Portaria AGU 377/2011, encaminhe-se o
crédito ao SUBNÚCLEO DE VERIFICAÇÃO DE RESULTADO E SANEAMENTO DE IRREGULARIDADE DO
PROTESTO (ENAC) para conferência e eventual tentativa de protesto do crédito, observados sempre a
prescrição da pretensão e o tempo operacional mínimo para execução de cada atividade e serviço
prestado.';
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
VERIFICAÇÃO DE PROTESTO: ESTADO: '.$uf.', PESQUISA DE BENS: '.$pesqbens.', DATA DA PRESCRIÇÃO: '.$data.'
 MODELO DE CERTIDÃO: HIPÓTESE 5';
 $certidao13='Certifico que a equipe SEIN – ENAC realizou as pesquisas patrimoniais acima especificadas
não encontrando resultados positivos nesta data.
Certifico, ainda, que não foi encontrado no processo despacho/tela que comprove o efetivo
protesto da dívida.
Dessa forma, diante da inexistência de bens nas pesquisas acima apontadas, há remota
possibilidade de satisfação judicial do crédito, não se justificando a movimentação do Poder Judiciário e
órgãos administrativos competentes por meio do processo judicial de execução fiscal, acaso viável a
cobrança extrajudicial do crédito.
Assim, nos termos autorizados pelo art. 4º, da Ordem de Serviço CGCOB n° 02/2018 c/c art
8º, §1º, da Portaria PGF 688/2016, e art. 3º, caput, e §2°, da Portaria AGU 377/2011, encaminhe-se o
crédito ao SUBNÚCLEO DE VERIFICAÇÃO DE RESULTADO E SANEAMENTO DE IRREGULARIDADE DO
PROTESTO (ENAC) para conferência e eventual tentativa de protesto do crédito, observados sempre a
prescrição da pretensão e o tempo operacional mínimo para execução de cada atividade e serviço
prestado.';
 if($resposta==2){
 $resposta= $resposta2;
 $modelo= $certidao2;
 }
 else if($resposta==1){
 $resposta= $resposta1;
  $modelo= $certidao1;
 }
 else if($resposta==3){
 $resposta= $resposta3;
  $modelo= $certidao3;
 }
 else if($resposta==4){
 $resposta= $resposta4;
  $modelo= $certidao4;
 }
 else if($resposta==5){
 $resposta= $resposta5;
  $modelo= $certidao5;
 }
 else if($resposta==6){
 $resposta= $resposta6;
  $modelo= $certidao6;
 }
 else if($resposta==7){
 $resposta= $resposta7;
  $modelo= $certidao7;
 }
 else if($resposta==8){
 $resposta= $resposta8;
  $modelo= $certidao8;
 }
 else if($resposta==9){
 $resposta= $resposta9;
  $modelo= $certidao9;
 }
 else if($resposta==10){
 $resposta= $resposta10;
  $modelo= $certidao10;
 }
 else if($resposta==11){
 $resposta= $resposta11;
  $modelo= $certidao11;
 }
 else if($resposta==12){
 $resposta= $resposta12;
  $modelo= $certidao12;
 }
 else if($resposta==13){
 $resposta= $resposta13;
  $modelo= $certidao13;
 }

if($pesq=="Pessoa Física"){
	$cpfoucnpj="CPF";
}
else{
	$cpfoucnpj="CNPJ";
}
$prog=" ";
$Y1="Efetivo protesto atestado no Seq: ";

if($protestado=="SIM"){
$prog="$Y1 $seq";	
$Y1=$prog;
	}

else{
	$Y1=" ";
}

$clasvalor=" ";
if($valor>5000){
$clasvalor="acima de R$ 5.000,00.";	
}
else{
$clasvalor="abaixo de R$ 5.000,00";
}

?>


<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
    <title>Certidão de Pré-Ajuizamento</title>
    <link rel="stylesheet" type="text/css"  href="css\estilo_certidoes.css" />
	<script language="text/javascript" href="js\javascript.js"></script>
</head>

<body>
	
	<!-- CABEÇALHO -->
	<header>
	<section id="resposta">
		<br>
		<div class="textarea-example">
   
    <div>
        <label for="advanced"></label>
        <textarea id="advanced" name="advanced"
                  rows="20" cols="70" maxlength="200"
                  wrap="hard">
<?=$resposta?>
        </textarea>
    </div>
</div>
<div><form action="index.php" method="POST">
<input type="submit" value="Inicio"> 
</form></div>
		<br>
	</section>
	<section class="clear">
		<div><h1 id="cabecalho_agu">
			<img src="brasao_de_armas.PNG" alt="Brasão das Armas" title="Brasão das Armas" /><br>
			<strong>
			<div>ADVOCACIA-GERAL DA UNIÃO</div>
			<div>PROCURADORIA-GERAL FEDERAL</div>
			<div>EQUIPE NACIONAL DE COBRANÇA</div>
			<div>DIVISÃO DE INTELIGÊNCIA - DIN</div>
			<hr id="barras">
			</strong>
		</h1></div>
	</header>
<?
if($pesq=="Empresário Individual Não Eirelli"){
$filiais = "A equipe NIEC– ENAC realizou pesquisas cadastrais em nome do interessado constatando se tratar de empresário individual não EIRELLI, recomendando-se que todas as medidas constritivas e pesquisas de bens sejam realizadas em face de todos os CPF/CNPJ(s) relacionados, se pertinente e cabível, a critério do procurador oficiante no feito.";	
}

?>
		<div><h2 id="cabecalho_cetidao">
			<div style="text-align: center;">CERTIDÃO DE PRÉ-AJUIZAMENTO</div><br>
			<div  id="cabecalho_cetidao" >NUP: <? echo $nup;?></div>
			<div  id="cabecalho_cetidao" style="text-transform: uppercase;">INTERESSADOS:<? echo $nome;?></div>
			<div  id="cabecalho_cetidao">ASSUNTOS: COBRANÇA E RECUPERAÇÃO DE CRÉDITOS<br></div></strong></h2>
		</div>
			<div align="justify"><p class="clear">Certiﬁco que a equipe SEIN – ENAC realizou pesquisas cadastrais, de dívidas e patrimoniais abaixo apontadas, obtendo os seguintes resultados nesta data:</p></div>
	</section>
	<section>
		<table>
			<tr><th class="td_titulo" colspan="2">1. Interessados Pesquisados:</th></tr>
				<tr><td class="td_linha" colspan="2" style="text-transform: uppercase;"><? echo $pesq;?>: <? echo $nome;?><? echo " ";?><? echo $cpfoucnpj;?>:<? echo $snome;?> - <? echo $filial;?></td></tr>
				<tr><td class="td_linha" colspan="2" ><div align="justify"><? echo $filiais;?> </div></td></tr><!-- <br/><br/><?//echo $filiais;?> -->
			<tr><th class="td_titulo" colspan="2">2. Autarquia Credora:</th></tr>
				<tr><td class="td_linha" colspan="2"><? echo $autarquia;?>.
				</td></tr>
			<tr><th class="td_titulo" colspan="2">3. Pesquisa de Bens:</th></tr>
			
					<tr><td class="td_linha"><strong>SINESP-INFOSEG.</strong></td></tr>
					<tr><td class="td_linha"><?echo $infoseg;?> - Sistema Nacional de Informações de Segurança Pública (SINESP-INFOSEG). Segue(m) em anexo pesquisa.</td></tr>
					<tr><td class="td_linha" colspan="2"><strong>Cartórios de Registro de Imóveis - CRI's:</strong></td></tr>
					<tr><td class="td_linha" ><?echo $cart;?></td></tr>
					<tr><td></td><td class="td_linha"></td></tr>
			
			<tr><th class="td_titulo" colspan="2">4. Check-list de encaminhamento:</th></tr>
				<tr><td class="td_linha" colspan="2"><? echo $Y1;?></td></tr>
				<tr><td class="td_linha" colspan="2">Valor da CDA <? echo $clasvalor;?></td></tr>
			<tr><th class="td_titulo" colspan="2">5. Conclusão:</th></tr>
				<tr><td class="td_linha" colspan="2"><div align="justify"><? echo $modelo;?></div></td></tr>
		</table>
	</section>
 
	<footer><!-- RODAPÉ -->
		<div>
			<br>
			<?
			setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('UTC');
strftime('%A, %d de %B de %Y', strtotime('today'));
date_default_timezone_set('UTC');
$date_day=strftime(', %d de %B de %Y', strtotime('today'));
			?>
			<p>Brasília<?echo $date_day;?></p>
			<br><br>
		</div>
		<div style="text-align: center;">
			<br>
			<div style="text-transform: uppercase;"><strong><?echo $servidor;?></div>
			<div>SERVIDOR</strong></div>
			<br>
		</div>
		<hr>
		<div>
			<p>Atenção, a consulta ao processo eletrônico está disponível em <span><a href="http://sapiens.agu.gov.br">http://sapiens.agu.gov.br</a></span> mediante o fornecimento do Número Único de Protocolo (NUP) <? echo $nup;?></p>
		</div>
	</footer>

</body>

</html>
<!--<form action="certidao_preajuizamento.php" method="POST">
<input type="hidden" id="resposta" name="resposta" value="<?=$resposta?>">
	  <input type="hidden" id="estado" name="estado" value="<?=$uf?>">
	  <input type="hidden" id="resp1" name="resp1" value="<?=$pesqbens?>">
	  <input type="hidden" id="data" name="data" value="<?=$data?>">
	  <input type="hidden" id="autarquia" name="autarquia" value="<?=$autarquia?>">
	  <input type="hidden" id="valor" name="valor" value="<?=$valor?>">
	  <input type="hidden" id="nup" name="nup" value="<?=$nup?>">
	  <input type="hidden" id="nome" name="nome" value="<?=$nome?>">
	  <input type="hidden" id="certidao" name="certidao" value="<?=$modelo?>">
	  <input type="hidden" id="snome" name="snome" value="<?=$snome?>">
	  <input type="hidden" id="pesq" name="pesq" value="<?=$pesq?>">
	  <input type="hidden" id="filiais" name="filiais" value="<?=$filiais?>">
	  <input type="hidden" id="cart" name="cart" value="<?=$cart?>">
	  <input type="hidden" id="seq" name="seq" value="<?=$seq?>">
	  <input type="hidden" id="servidor" name="servidor" value="<?=$servidor?>">
	  <input type="hidden" id="infoseg" name="infoseg" value="<?=$infoseg?>">
	  	  <input type="hidden" id="resp3" name="resp3" value="<?=$protestado?>">


        <button type="submit" name="submit">Enviar</button>
</form>
<p></p><p></p>
<form action="index.php" method="POST">
<input type="submit" value="Voltar"> 
</form>-->
</body>
</html>