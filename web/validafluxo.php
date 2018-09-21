<?php
include('db.php');
$uf=$_POST["estado"];
$municipio=$_POST["municipio"];
$valor=$_POST["valor"];
$pesqbens=$_POST["resp1"];
$autarquia=$_POST["resp2"];
$protestado=$_POST["resp3"];
$data=$_POST["data"];
$teste11="isso";

   
    
date_default_timezone_set('America/Sao_Paulo');
$data1 = date('Y-m-d');
   
   $dat = strtotime($data)- strtotime($data1);
    $data2 = floor($dat / (60 * 60 * 24));

    
 


 

if (!empty($_POST) AND (empty($_POST['estado']) OR empty($_POST['municipio'])OR empty($_POST['valor'])OR empty($_POST['resp1'])OR empty($_POST['resp2'])OR empty($_POST['resp3'])OR empty($_POST['data']))) {
header("Location: fluxajuizamento.php"); exit;}
$resposta1=1;
 $resposta2=2;
 $resposta3=3;
 $resposta4=4;
 $resposta5=5;
 $resposta6=6;
 $resposta7=7;
 $resposta8=8;
 $resposta9=9;
 $resposta10=10;
 $resposta11=11;
 $resposta12=12;
 $resposta13=13;

		if($data2<61){
		//$resposta1;
		header("Location: resposta.php?resposta=".$resposta1."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
		}
		else{
			if($valor>5000){
						if($data2<365){
				//$resposta2;
		header("Location: resposta.php?resposta=".$resposta2."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
									  }
						else {
			//$resposta3;
				header("Location: resposta.php?resposta=".$resposta3."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
										 }
						}
			else{
						if($pesqbens=='POSITIVA'){
								  if($data2<365){
					//$resposta4;
				header("Location: resposta.php?resposta=".$resposta4."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
												}
									else {
				//$resposta5;
					header("Location: resposta.php?resposta=".$resposta5."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
				
										  }			
																  }
						 else{
									if($autarquia=='OUTRAS'){
												 if($data2<365){
							//$resposta6;
							 header("Location: resposta.php?resposta=".$resposta6."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
																						}
												 else {
						//$resposta7;
		 header("Location: resposta.php?resposta=".$resposta7."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
																		   }
															 }
									else{
											if($protestado=='SIM'){
														 if($data2<365){
							//$resposta8;
							 header("Location: resposta.php?resposta=".$resposta8."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
												 }
						  else {
						//$resposta9;
		 header("Location: resposta.php?resposta=".$resposta9."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
										}
									}
						 else{
							 if($municipio=='SEM PROTESTO'){
								 if($data2<365){
							 //$resposta10;
							 header("Location: resposta.php?resposta=".$resposta10."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
												 }
								 else {
					//$resposta11;
		 header("Location: resposta.php?resposta=".$resposta11."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
										}
							 }
						 else{
							 if($data2<365){
						//$resposta12;
							 header("Location: resposta.php?resposta=".$resposta12."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
												 }
								 else {
						//$resposta13;
		 header("Location: resposta.php?resposta=".$resposta13."&estado=".$uf."&resp1=".$pesqbens."&data=".$data2);
										}
							  }	 
						 }
			}
			}
		}}
?>