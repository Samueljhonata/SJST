<?php
	//$tipo_igreja = $_GET['tipo_con']; /*1 ou 2*/
	$tipo_igreja = $tipo;
	
	if($tipo_igreja == 1){//NIVEL I
		include("lote/igreja/igreja.php");
	}
	if($tipo_igreja == 2){//NIVEL II
		include("lote/igreja/catedral.php");
	}
	if($tipo_igreja == 3){//SEMINARIO
		include("lote/igreja/seminario.php");
	}
?>