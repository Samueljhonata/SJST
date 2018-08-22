<?php 
	if(isset($_GET['ed'])){
		switch($_GET['ed']){
			case 1: include("lote/governo/praca_real/palacio_real.php"); break;
			case 2: include("lote/governo/praca_real/palacio_da_justica.php"); break;
			case 3: include("lote/governo/praca_real/palacio_das_cortes.php"); break;
		}
	}else{
?>

<h2 class="titulo2">Praça Real</h2>
	<div style="background-image:url(imagens/mapa_p_ribeira.png); background-repeat: no-repeat;background-position: center top;" class="divPrincipal center-block text-center">
		<map name = "paco_ribeira_map"> 
			<area shape = "rect" alt="parte 1" coords = "205, 125, 700, 210" href="lote.php?id=0&tipo_ed=2&tipo_con=9&ed=1" title="Palácio Real"/> 
			<area shape = "rect" alt="parte 1" coords = "70, 100, 205, 290" href="lote.php?id=0&tipo_ed=2&tipo_con=9&ed=2" title="Palácio da Justiça"/>
			<area shape = "rect" alt="parte 1" coords = "710, 100, 835, 290" href="lote.php?id=0&tipo_ed=2&tipo_con=9&ed=3" title="Palácio das Cortes"/>			
		</map>

		<img usemap="#paco_ribeira_map" src='imagens/paco_ribeira.png' style='height:300px;' />
		<br>
		<br><a href="lote.php?id=0&tipo_ed=2&tipo_con=9&ed=1" class="sala" style="position:relative; top: -190px;">Palácio Real</a>
		<br><a href="lote.php?id=0&tipo_ed=2&tipo_con=9&ed=2" class="sala" style="position:relative; top: -185px;left: -350px; ">Palácio da Justiça</a>
		<br><a href="lote.php?id=0&tipo_ed=2&tipo_con=9&ed=3" class="sala" style="position:relative; top: -200px;left: 280px;">Palácio das Cortes</a>
	</div>
	<?php }?>