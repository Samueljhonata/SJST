	<h2 class="titulo2">Mercado Municipal de <?php echo $nome_vila; ?></h2>
		
	<div style="width:1000px; height: 500px;"> 

		<div align="left" style="border:none;">
			<a href="?id=0&tipo_ed=2&tipo_con=6&a=1" class="menuCima"> Mercado de Bens</a> 
			<a href="?id=0&tipo_ed=2&tipo_con=6&a=2" class="menuCima"> Mercado de Trabalho</a> 
			<a href="?id=0&tipo_ed=2&tipo_con=6&a=3" class="menuCima"> Mercado Imobiliário</a>
		</div>
			
		<div align="center" style="border:none;position:relative; top:-10px;">
			<?php
				if(isset($_GET['a'])){
					switch($_GET['a']){
						case 1: include("lote/governo/mercado_municipal/mercado_bens.php"); break;
						case 2: include("lote/governo/mercado_municipal/mercado_trabalho.php"); break;
						case 3: include("lote/governo/mercado_municipal/mercado_bens.php"); break;
					}
				}else{
					include("lote/governo/mercado_municipal/mercado_bens.php");
				}	
			?>	
		</div>
	</div>

