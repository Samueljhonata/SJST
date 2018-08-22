<?php
	$tipo_oficina = $_GET['tipo_con']; /*1 a 13*/
	
	switch($tipo_oficina){
		case 1: include("lote/edificio_especial/consultorio/consultorio.php"); break;
		case 2: include("lote/edificio_especial/fabrica_polvora/fabrica_polvora.php"); break;
		case 3: include("lote/edificio_especial/fabrica_seda/fabrica_seda.php"); break;
		case 4: include("lote/edificio_especial/fabrica_tabaco/fabrica_tabaco.php"); break;
		case 5: include("lote/edificio_especial/fabrica_tecido/fabrica_tecido.php"); break;
		case 6: include("lote/edificio_especial/refinaria/refinaria.php"); break;
		case 7: include("lote/edificio_especial/vinicola/vinicola.php"); break;
	}
?>