<?php
include('db.php');
$uf=$_POST["estado"];
$municipio=$_POST["municipio"];
$valor=$_POST["valor"];
$pesqbens=$_POST["resp1"];
$autarquia=$_POST["resp2"];
$protestado=$_POST["resp3"];
$data=$_POST["data"];
$outros=$_POST["outros"];


   
    
//date_default_timezone_set('America/Sao_Paulo');
//$data1 = date('Y-m-d');
   
   //$dat = strtotime($data)- strtotime($data1);
 //   $data2 = floor($dat / (60 * 60 * 24));
$data2 = $data;
    
 


 

if (!empty($_POST) AND (empty($_POST['estado']) OR empty($_POST['municipio'])OR empty($_POST['valor'])OR empty($_POST['resp1'])OR empty($_POST['resp2'])OR empty($_POST['resp3'])OR empty($_POST['data']))) {
header("Location: index.php"); exit;}
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
//."&valor=".$valor."&autarquia=".$autarquia
		if($data2<61){
		//$resposta1;
		header("Location: formulariof1.php?resposta=".$resposta1."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
		}
		else{
			if($valor>5000){
						if($data2<365){
				//$resposta2;
		header("Location: formulariof1.php?resposta=".$resposta2."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
									  }
						else {
			//$resposta3;
				header("Location: formulariof1.php?resposta=".$resposta3."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
										 }
						}
			else{
						if($pesqbens=='POSITIVA'){
								  if($data2<365){
					//$resposta4;
				header("Location: formulariof1.php?resposta=".$resposta4."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
												}
									else {
				//$resposta5;
					header("Location: formulariof1.php?resposta=".$resposta5."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
				
										  }			
																  }
						 else{
									if($autarquia=='OUTRAS'){
												 if($data2<365){
							//$resposta6;
							 header("Location: formulariof1.php?resposta=".$resposta6."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
																						}
												 else {
						//$resposta7;
		 header("Location: formulariof1.php?resposta=".$resposta7."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
																		   }
															 }
									else{
											if($protestado=='SIM'){
														 if($data2<365){
							//$resposta8;
							 header("Location: formulariof1.php?resposta=".$resposta8."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
												 }
						  else {
						//$resposta9;
		 header("Location: formulariof1.php?resposta=".$resposta9."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
										}
									}
						 else{
							 if($municipio=='SEM PROTESTO'){
								 if($data2<365){
							 //$resposta10;
							 header("Location: formulariof1.php?resposta=".$resposta10."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
												 }
								 else {
					//$resposta11;
		 header("Location: formulariof1.php?resposta=".$resposta11."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
										}
							 }
						 else{
							 if($data2<365){
						//$resposta12;
							 header("Location: formulariof1.php?resposta=".$resposta12."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
												 }
								 else {
						//$resposta13;
		 header("Location: formulariof1.php?resposta=".$resposta13."&estado=".$uf."&resp1=".$pesqbens."&resp3=".$protestado."&data=".$data2."&valor=".$valor."&outros=".$outros."&autarquia=".$autarquia);
										}
							  }	 
						 }
			}
			}
		}}
?>