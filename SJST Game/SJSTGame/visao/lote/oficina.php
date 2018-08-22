<?php
	$tipo_con = $_GET['tipo_con']; /*1 a 12*/
	$titulo[1] = "Atelier";
	$titulo[2] = "Barbearia";
	$titulo[3] = "Carpintaria";
	$titulo[4] = "Casa de Armas";
	$titulo[5] = "Destilaria";
	$titulo[6] = "Lagar";
	$titulo[7] = "Moinho";
	$titulo[8] = "Olaria";
	$titulo[9] = "Ourivesaria";
	$titulo[10] = "Padaria";
	$titulo[11] = "Serralheria";
	$titulo[12] = "Talho";
	echo"
	<h2 class='titulo2'> $titulo[$tipo_con] </h2>
	<div style='width: 1000px;height: 500px;'>
		
		<div align='left' style='border:none;'>
			<a href='lote.php?tipo_ed=4&tipo_con=$tipo_con&id=5&a=1' class='menuCima'> Informações</a> 
			<a href='lote.php?tipo_ed=4&tipo_con=$tipo_con&id=5&a=2' class='menuCima'> Produzir</a>
			<a href='lote.php?tipo_ed=4&tipo_con=$tipo_con&id=5&a=3' class='menuCima'> Despensa</a> 
			<a href='lote.php?tipo_ed=4&tipo_con=$tipo_con&id=5&a=4' class='menuCima'> Gerir</a>
			<a href='pagina_principal.php?a=8' class='menuCima'> Mapa</a> 
		</div>
	
	";
	switch($tipo_con){
		case 1: include("lote/oficina/atelier/atelier.php"); break;
		case 2: include("lote/oficina/barbearia/barbearia.php"); break;
		case 3: include("lote/oficina/carpintaria/carpintaria.php"); break;
		case 4: include("lote/oficina/casa_armas/casa_armas.php"); break;
		case 5: include("lote/oficina/destilaria/destilaria.php"); break;
		case 6: include("lote/oficina/lagar/lagar.php"); break;
		case 7: include("lote/oficina/moinho/moinho.php"); break;
		case 8: include("lote/oficina/olaria/olaria.php"); break;
		case 9: include("lote/oficina/ourivesaria/ourivesaria.php"); break;
		case 10: include("lote/oficina/padaria/padaria.php"); break;
		case 11: include("lote/oficina/serralheria/serralheria.php"); break;
		case 12: include("lote/oficina/talho/talho.php"); break;
	}
?>
</div>