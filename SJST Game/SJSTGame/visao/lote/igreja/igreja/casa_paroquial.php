
	<?php 

	?>
	
		<h3 class="titulo3">Casa Paroquial de <?php echo $nome_vila; ?></h3>
		<table>
			
			<tr align="center">
				
				<td>
					<a href="?a=3&b=1" class="sala"> Sala de Estar </a>
				</td>
				
				<td>
					<a href="?a=3&b=2" class="sala"> Salão dos Sacerdotes </a>
				</td>
				
				<td>
					<a href="?a=3&b=3" class="sala"> Aposentos </a>
				</td>
				
			</tr>
		</table>
	
		
	
	
		<?php
			if (isset($_GET['b'])){
				if ($_GET['b'] == 1){
					//include("");
				}
				if ($_GET['b'] == 2){
					//include("");
				}
				if ($_GET['b'] == 3){
					//include("");
				}
			}
		
		?>
	</div>