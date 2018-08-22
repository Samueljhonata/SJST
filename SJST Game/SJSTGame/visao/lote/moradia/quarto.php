
	<h3 class="titulo3">Quarto</h3>
		
	<div style="width:95%; height: 80%;"> 

		<div align="left" style="border:none;">
			<a href="lote.php?id=0&tipo_ed=3&ed=1&a=2&b=1" class="menuCima"> Camas</a> 
			<a href="lote.php?id=0&tipo_ed=3&ed=1&a=2&b=2" class="menuCima"> Despensa</a> 
			<a href="lote.php?id=0&tipo_ed=3&ed=1" class="menuCima"> Voltar</a>
		</div>
			
		<div align="center" style="border:none;position:relative; top:-10px;">
			<?php
				if(isset($_GET['b'])){
					switch($_GET['b']){
						case 1: include("lote/moradia/camas.php"); break;
						case 2: include("despensa.php"); break;
					}
				}		
			?>	
		</div>
	</div>

