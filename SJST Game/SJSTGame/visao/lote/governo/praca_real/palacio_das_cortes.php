	<?php 

	?>
	<div align='center'>
		<h2 class="titulo2">Palácio das Cortes Reais</h2>
		<table>
			
			<tr align="center">
				<td>
					<a href="?a=1" class="sala"> Cortes Gerais </a>
				</td>
				
				<td>
					<a href="?a=2" class="sala"> Corte dos Nobres </a>
				</td>

				<td>
					<a href="?a=3" class="sala"> Corte dos Comum </a>
				</td>
			</tr>
		</table>
	
	
	
		<?php
			if (isset($_GET['a'])){
				if ($_GET['a'] == 1){
					include("corte_real/cortes_gerais.php");
				}
				if ($_GET['a'] == 2){
					//include("real_fazenda.php");
				}
				if ($_GET['a'] == 3){
					//include("secret_real_guerra.php");
				}
			}
		
		?>
	</div>