<h2 class="titulo2">Porto de <?php echo $nome_vila ?></h2>
<div style="width: 1000px;height: 500px;">
	<div align="left" style="border:none;">
		<a href="acre.php?id=9&tipo_ed=1&a=1" class="menuCima"> Zona de Atracagem</a>
		<a href="acre.php?id=9&tipo_ed=1&a=2" class="menuCima"> Mercado Naval</a>
		<a href="acre.php?id=9&tipo_ed=1&a=3" class="menuCima"> Estaleiro Naval</a>
		<a href="acre.php?id=9&tipo_ed=1&a=4" class="menuCima"> Gabinete do Capitão do Porto</a>
	</div>
		
		<?php
		if(isset($_GET['a'])){
			switch($_GET['a']){
				case 1: include("porto/atracagem.php");	break;
				case 2: include("porto/mercado_naval.php");	break;
				case 3: include("porto/estaleiro_naval.php"); break;
				case 4: include("porto/gabinete_capitao.php"); break;
			}
		}else{
			//include("arredores/viajar/mapa_viajar.php");
		}
	?>	
</div>
