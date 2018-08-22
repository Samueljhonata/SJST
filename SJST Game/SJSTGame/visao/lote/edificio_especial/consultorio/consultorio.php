
	<?php 

	?>
	
		<h3 class="titulo3"> Meu Consultório Médico </h3>
		<table>
			<tr align='center'>
				<td>
					<a href="?a=1&b=1" class="sala"> Informações </a>
				</td>
				
				<td>
					<a href="?a=1&b=2" class="sala"> Sala de Poções </a>
				</td>
				
				<td>
					<a href="?a=1&b=3" class="sala"> Sala de Estudos </a>
				</td>
				
				<td>
					<a href="?a=1&b=4" class="sala"> Sala de Consulta </a>
				</td>
				
				<td>
					<a href="?a=1&b=5" class="sala"> Gerir </a>
				</td>
		</tr>
		</table>
		
	<?php 
		if(isset($_GET['b'])){
			if($_GET['b'] == 1){
				//include("edificio_especial/.php");
			}
		}
	?>