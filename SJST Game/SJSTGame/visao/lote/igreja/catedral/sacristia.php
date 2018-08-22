
	<?php 

	?>
	
		<h3 class="titulo3">Sacristia da Catedral Diocesana de <?php echo $nome_vila; ?></h3>
		<table>
			
			<tr align="center">
				
				<td>
					<a href="?a=4&b=1" class="sala"> Preparar o Culto </a>
				</td>
				
				<td>
					<a href="?a=4&b=2" class="sala"> Preparar a Missa </a>
				</td>
				
				<td>
					<a href="?a=4&b=3" class="sala"> Preparar Festa </a>
				</td>
				
				<td>
					<a href="?a=4&b=4" class="sala"> Preparar Batismo </a>
				</td>
				
				<td>
					<a href="?a=4&b=6" class="sala"> Preparar Ordenação </a>
				</td>

				<td>
					<a href="?a=4&b=5" class="sala"> Inventário Disponível </a>
				</td>

			</tr>
		</table>
	
		
	
	
		<?php
			if (isset($_GET['b'])){
				if ($_GET['b'] == 1){
					include("sacristia/preparar_culto.php");
				}
				if ($_GET['b'] == 2){
					include("sacristia/preparar_missa.php");
				}
				if ($_GET['b'] == 3){
					include("sacristia/preparar_festa.php");
				}
				if ($_GET['b'] == 4){
					include("sacristia/preparar_batismo.php");
				}
				if ($_GET['b'] == 6){
					include("sacristia/preparar_ordenacao.php");
				}
			}
		
		?>
	</div>