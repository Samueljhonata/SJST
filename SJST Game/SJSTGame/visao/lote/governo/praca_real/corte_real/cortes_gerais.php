	<?php 

	?>
	
		<h3 class="titulo3">Cortes Gerais</h3>
		<table>
			<tr align="center">
				<td>
					<a href="?a=1&b=1" class="sala"> Plenário </a>
				</td>
				
				<td>
					<a href="?a=1&b=2" class="sala"> Gabinete do Presidente </a>
				</td>
				
				<td>
					<a href="?a=1&b=3" class="sala"> Gabinete do Deputado </a>
				</td>
			</tr>
		</table>
	
		<?php
			if (isset($_GET['b'])){
				if ($_GET['b'] == 1){
					//include("corte_real/gabinete_presidente.php")
				}
				if ($_GET['b'] == 2){
					include("corte_real/gabinete_presidente.php");
				}
				if ($_GET['b'] == 3){
					include("corte_real/gabinete_deputado.php");
				}
			}
		
		?>
	</div>