<?php 
	include("cabecalho.php");
	echo"<div align='center'>";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$tipo_ed = $_GET['tipo_ed'];//pega no DB
		$venda = 1;//pega no DB
		
		switch($tipo_ed){
			case 0: include("acre/vazio.php"); break;
			case 1: include("acre/porto.php"); break;
			case 2: include("acre/floresta.php"); break;
			case 3: include("acre/mina.php"); break;
			case 4: include("acre/area_militar.php"); break;
			case 5: include("acre/terra.php"); break;
			case 6: include("acre/edificio_especial.php"); break;
			case 7: include("acre/quartel.php"); break;
			case 8: include("acre/acampamento_militar.php"); break;
		}
	}
	echo"<br></div>";
	include("rodape.php");
?>