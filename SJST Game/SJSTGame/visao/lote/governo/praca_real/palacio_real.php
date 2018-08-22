

	<?php 

	?>
	<div align='center'>
		<h2 class="titulo2">Palácio da Ribeira</h2>
		<table>
			
			<tr align="center">
				<td>
					<a href="palacio_da_ribeira.php?a=1" class="sala"> Sala do Trono </a>
				</td>
				
				<td>
					<a href="palacio_da_ribeira.php?a=2" class="sala"> Gabinete do Marquês de Pombal </a>
				</td>

				<td>
					<a href="palacio_da_ribeira.php?a=3" class="sala"> Gabinete do Secretário </a>
				</td>
			</tr>
		</table>
	
	
	
		<?php
			if (isset($_GET['a'])){
				if ($_GET['a'] == 1){
					include("paco_ribeira/sala_do_trono.php");
				}
				if ($_GET['a'] == 2){
					include("paco_ribeira/gabinete_p_ministro.php");
				}
				if ($_GET['a'] == 3){
					include("paco_ribeira/gabinete_secretario.php");
				}
			}
		
		?>
	</div>