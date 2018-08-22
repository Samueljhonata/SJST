<?php
	$tipo_con = $_GET['tipo_con']; /*1 a 13*/
	
	switch($tipo_con){
		case 1: include("acre/edificio_especial/capela.php"); break;
		case 2: include("acre/edificio_especial/engenho.php"); break;
		case 3: include("acre/edificio_especial/fazenda.php"); break;
		case 4: include("acre/edificio_especial/mina.php"); break;
	}
?>