
	<?php 

	?>
	
		<h3 class="titulo3"> Tribunal do Juri - Provincía da Estremadura</h3>
		<table>
			
			<tr align="center">
				<td>
					<a href="?a=1&b=1" class="sala"> Informações </a>
				</td>
				
				<td>
					<a href="?a=1&b=2" class="sala"> Processos em Andamento </a>
				</td>
				
				<td>
					<a href="?a=1&b=3" class="sala"> Processos finalizados </a>
				</td>
			</tr>
		</table>
	
		
	
	
		<?php
			if (isset($_GET['b'])){
				if ($_GET['b'] == 1){
					echo"
					<table>
						
						<tr align='center'>
							<td colspan='2'>
								Informações sobre o Tribunal Regional 
							</td>
						</tr>
						<tr>
							<td>
								Ouvidor-Mor: 
							</td>
							<td>
								Nome
							</td>
						</tr>
						<tr>
							<td>
								Ouvidores: 
							</td>
							<td>
								Nomes
							</td>
						</tr>
					</table>
					";
				}
			/*	if ($_GET['a'] == 2){
					include("");
				}
				if ($_GET['a'] == 3){
					include("");
				}*/
			}
		
		?>
	</div>