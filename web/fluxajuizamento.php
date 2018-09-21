<?php
include('db.php');
$estadosBrasileiros = array(
'AC'=>'Acre',
'AL'=>'Alagoas',
'AP'=>'Amapá',
'AM'=>'Amazonas',
'BA'=>'Bahia',
'CE'=>'Ceará',
'DF'=>'Distrito Federal',
'ES'=>'Espírito Santo',
'GO'=>'Goiás',
'MA'=>'Maranhão',
'MT'=>'Mato Grosso',
'MS'=>'Mato Grosso do Sul',
'MG'=>'Minas Gerais',
'PA'=>'Pará',
'PB'=>'Paraíba',
'PR'=>'Paraná',
'PE'=>'Pernambuco',
'PI'=>'Piauí',
'RJ'=>'Rio de Janeiro',
'RN'=>'Rio Grande do Norte',
'RS'=>'Rio Grande do Sul',
'RO'=>'Rondônia',
'RR'=>'Roraima',
'SC'=>'Santa Catarina',
'SP'=>'São Paulo',
'SE'=>'Sergipe',
'TO'=>'Tocantins'
);

$a= array_keys($estadosBrasileiros);
$uf=$_POST["estado"];
if(isset($uf))
{
	
}
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
     <!-- chama o arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
</head>
<body><strong><p></p><p></p>

<div>PRÉ AJUIZAMENTO</div>

<!--!inserir campo que pede data-->
<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('UTC');
//$date_day=strtotime('');
//echo $date_day;
?>
<form   id="form" method="POST">

<div>Estado</div>
<div><p></p><p></p>
    <select name="estado" id="estado" onchange="submit()">
        <option selected="selected">selecione</option>
        <?
         foreach($a as $item1){
			 if($item1==$uf)
				 echo "<option value=".$item1." selected>".$item1."</option>";
			 else
				 echo "<option value=".$item1.">".$item1."</option>";
        }
        ?>
    </select></div>
	<p></p><p></p>
</form>

<form  action="validafluxo.php" method="POST">  	
<div>Data</div>
	<div><label for="data"></label><input type="date" id="data" name="data" value="<?=$day?>"/>
</div><p></p><p></p>	

 <div>Município</div>
<div>
    <select name="municipio" id="municipio" value="<?=$municipios[$uf]?>">
        <option selected="selected">selecione</option>
        <?
         foreach($municipios[$uf] as $item2){
        ?>
        <option value="<?=$item2?>"><? echo $item2; ?></option>
        <?
        }
        ?>
    </select></div>
	<p></p><p></p>
	<input type="hidden" name="estado" value="<?=$uf?>">
	<div>Valor</div>
	<div><label for="valor"></label><input type="money_format" id="valor" name="valor" placeholder="R$" />
</div><p></p><p></p>

	<div>Houve pesquisa de bens?</div>
	<p></p><p></p>
<div><input type="radio" name="resp1" id="resp1" value="POSITIVA"/>POSITIVA</div>
<div><input type="radio" name="resp1" id="resp1" value="NEGATIVA"/>NEGATIVA</div>
 <p></p><p></p>
<div>Qual a autarquia do processo?</div>
	<p></p><p></p>
<div><input type="radio" name="resp2" id="resp2" value="IBAMA"/>IBAMA</div>
<div><input type="radio" name="resp2" id="resp2" value="INMETRO"/>INMETRO</div>
<div><input type="radio" name="resp2" id="resp2" />OUTRAS</div>
<div><label for="outros"></label><input type="text" id="resp2" />
</div>
<div>Já foi protestado?</div>
	<p></p><p></p>
<div><input type="radio" name="resp3" id="resp3" value="SIM"/>SIM</div>
<div><input type="radio" name="resp3" id="resp3" value="NÃO"/>NÃO</div>
 <p></p><p></p>
 <p></p><p></p>
 
</div>
    <input type="submit" value="Gerar Resultado">
</form>


</body>
</html>