
	<?php 

	?>
	
		<h3 class="titulo3">Fórum Municipal - Tribunal do Juri</h3>
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
							<td style='background-color: gray;'>
								Informações sobre Tribunal Superior do Reino de Portugal (Desembargo do Paço)
							</td>
						</tr>
						<tr>
							<td>
								Chanceler-Mor: 
							</td>
						</tr>
						<tr>
							<td>
								Desembargadores: 
							</td>
						</tr>
						<tr>
							<td>
								Promotor Real de Justiça: 
							</td>
						</tr>
						
						
						<tr align='center'>
							<td style='background-color: gray;'>
								Informações sobre Tribunal Regional (Casa da Suplicação) de Estremadura
							</td>
						</tr>
						<tr>
							<td>
								Ouvidor-Mor: 
							</td>
						</tr>
						<tr>
							<td>
								Ouvidores: 
							</td>
						</tr>
						<tr>
							<td>
								Juiz de Fora: 
							</td>
						</tr>
						<tr>
							<td>
								Promotor de Justiça: 
							</td>
						</tr>
						
						
						<tr align='center'>
							<td style='background-color: gray;'>
								Informações sobre o Tribunal Municipal (Fórum de Justiça) de $nome_vila
							</td>
						</tr>
						<tr>
							<td>
								Juiz: 
							</td>
						</tr>
						<tr>
							<td>
								Promotor de Justiça: 
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