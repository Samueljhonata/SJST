
	<?php 

	?>
	
		<h4 style="background-color:rgb(200,200,200);color:white">Casa da Moeda Regional</h4>
		<table>
			
			<tr align="center">
				<td>
					<a href="?a=2&casa_moeda=1" class="sala"> Despensa </a>
				</td>
				
				<td>
					<a href="?a=2&casa_moeda=2" class="sala"> Vender Ouro </a>
				</td>
				
				<td>
					<a href="?a=2&casa_moeda=3" class="sala"> Emitir Títulos </a>
				</td>
				
				<td>
					<a href="?a=2&casa_moeda=4" class="sala"> Títulos Emitidos</a>
				</td>
				
				<td>
					<a href="?a=2&casa_moeda=5" class="sala"> Histórico </a>
				</td>
			</tr>
		</table>
	
	
	
		<?php
			if (isset($_GET['casa_moeda'])){
				if ($_GET['casa_moeda'] == 1){
					include("casa_moeda/despensa.php");
				}
				if ($_GET['casa_moeda'] == 2){
					include("casa_moeda/vender_ouro.php");
				}
				if ($_GET['casa_moeda'] == 3){
					include("casa_moeda/titulos.php");
				}
				if ($_GET['casa_moeda'] == 4){
					include("casa_moeda/titulos_emitidos.php");
				}
			}
		
		?>
	</div>