<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<div align= "center"><strong>
<div><img src="brasao_de_armas.png" alt="Brasão das Armas" title="Brasão das Armas" /></div>
<div>ADVOCACIA-GERAL DA UNIÃO</div>
<div>PROCURADORIA-GERAL FEDERAL</div>
<div>EQUIPE NACIONAL DE COBRANÇA</div>
<div>DIVISÃO DE INTELIGÊNCIA - ENAC DIN</div></strong></div>
<?php
$resposta=$_GET["resposta"];
$uf=$_GET["estado"];
$pesqbens=$_GET["resp1"];
$data=$_GET["data"];
$autarquia=$_GET["autarquia"];
$valor=$_GET["valor"];
$protestado=$_GET["resp3"];
$outros=$_GET["outros"];
$uf=$_GET["uf"];
$modelo=$_GET["modelo"];
$uf=$_GET["estado"];
//$nup=$_GET["nup"];
//$nome=$_GET["nome"];
//$snome=$_GET["snome"];
//$pesq=$_GET["pesq"];
//$filiais=$_GET["filiais"];
//$cart=$_GET["cart"];
//$seq=$_GET["seq"];
//$modelo=$_GET["certidao"];
//$servidor=$_GET["servidor"];	
//$infoseg=$_GET["infoseg"];	


//$cpfoucnpj="isso";
//echo $outros;
?>
  <meta charset="UTF-8">
    <title>Formulário Certidão Faixa 1</title>
     <!-- chama o arquivo css externo -->
    <link rel="stylesheet" type="text/css"  href="estilo2.css" />
</head>
<body><strong><p></p><p></p>

<form action="resposta.php" method="POST">
    <fieldset>
        <fieldset>
            <div><p></p><p></p>
			 <label for="nome">NUP</label>
                <input type="text" id="nup" name="nup" style="width: 20em" value="<?=$nup?>" placeholder="<?=$nup?>"><br/><br/>
			
                <label for="nome">Interessado Pesquisado</label> 
                <input type="text" id="nome" name="nome" style="width: 20em" value="<?=$nome?>" ><label for="nome"> Relação</label> <select name="filial" style="width: 5em" id="filial" value="<?=$filial?>">
    <option value="">Selecione</option>
    <option value="Filial">Filial</option>
    <option value="Matriz">Matriz</option>
    </select><br/><br/>
            
            
                <label for="snome">CPF/CNPJ</label>
                <input type="text" id="snome" name="snome" style="width: 20em" value="<?=$snome?>">
            </div><p></p><p></p>
        </fieldset><p></p>
		<div></div><p></p><p></p>
        <div>Pesquisa Cadastral
           <label for="list"></label>
         <select name="pesq" style="width: 5em" id="pesq" value="<?=$pesq?>">
	<option value="">Selecione</option>
    <option value="Pessoa Física">Pessoa Física</option>
    <option value="Pessoa Jurídica/Eirelli">Pessoa Jurídica/Eirelli</option>
    <option value="Empresário Individual Não Eirelli">Empresário Individual Não Eirelli</option>
    </select>
    </div><p></p><p></p>
			 <div></div>  <p></p><p></p>
        <div>Filiais
            <label for="list" ></label>
         <select name="filiais" style="width: 5em" id="filiais" value="<?=$filiais?>">
	<option value="">Selecione</option>
    <option value="A equipe NIEC– ENAC realizou pesquisas cadastrais em nome do interessado constatando se tratar de empresa vinculada a outra(s) filial(ais)/matriz, conforme interessados relacionados em anexo, recomendando-se que todas as medidas constritivas e pesquisas de bens sejam realizadas em face de todos os CNPJ(s), se pertinente e cabível, a critério do procurador oficiante no feito.">Sim (Conforme Relacionado Acima e/ou Anexos)</option>
    <option value="Pessoa Jurídica sem filiais mapeadas nesta data">Não</option>
    </select>
    </div><p></p><p></p>
		</div><p></p><p></p>
		<div></div> <p></p><p></p> 
            <div>Cartório de Registro de Imóveis
        <label for="list"></label>
         <select name="cart" style="width: 5em" id="cart" value="<?=$cart?>">
	<option value="">Selecione</option>
    <option value="POSITIVA - Sistemas informatizados dos Cartórios de Registro de imóveis. Segue(m) em anexo pesquisa.">POSITIVO, Sistemas Informatizado</option>
    <option value="NEGATIVA - Sistemas informatizados dos Cartórios de Registro de imóveis. Segue(m) em anexo pesquisa.">NEGATIVO, Sistemas informatizado</option>
	<option value="Consulta eletrônica aos CRI´s não disponível para o ESTADO/MUNICÍPIO do pesquisado.">Consulta Eletrônica não Disponível</option>
    </select>
    </div><p></p><p></p><p></p>
	<div></div> <p></p><p></p> 
            <div>SINESP-INFOSEG
        <label for="list"></label>
         <select name="infoseg" style="width: 5em" id="infoseg" value="<?=$infoseg?>">
	<option value="">Selecione</option>
    <option value="POSITIVA">POSITIVO</option>
    <option value="NEGATIVA">NEGATIVO</option>
	</select>
    </div><p></p><p></p><p></p>
	<div>EFETIVO PROTESTO ATESTADO</div>  <p></p>
	           <label <label for="seq">Seq(id)</label>
                <input type="text" id="seq" name="seq" style="width: 20em" value="<?=$seq?>">
			
<p></p><p></p>
<label for="nome">Servidor Responsável</label>
                <input type="text" id="servidor" name="servidor" style="width: 20em" value="<?=$servidor?>"><br/><br/>

      <input type="hidden" id="resposta" name="resposta" value="<?=$resposta?>">
	  <input type="hidden" id="estado" name="estado" value="<?=$uf?>">
	  <input type="hidden" id="resp1" name="resp1" value="<?=$pesqbens?>">
	  <input type="hidden" id="data" name="data" value="<?=$data?>">
	  <input type="hidden" id="autarquia" name="autarquia" value="<?=$autarquia?>">
	  <input type="hidden" id="valor" name="valor" value="<?=$valor?>">
	  	  <input type="hidden" id="resp3" name="resp3" value="<?=$protestado?>">
		  	  	  <input type="hidden" id="outros" name="outros" value="<?=$outros?>">


	  
        <button type="submit" name="submit">Enviar</button>
    </fieldset>
</form>
</div></strong>



</body>
</html>