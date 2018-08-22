
	<?php 

	?>
	
		<h3 style="background-color:rgb(200,200,200);color:white"> Meu Engenho de Cana-de-Açúcar </h3>
		<table>
			<tr align='center'>
				<td>
					<a href="?a=1&b=1" class="sala"> Informações </a>
				</td>
				
				<td>
					<a href="?a=1&b=2" class="sala"> Canavial </a>
				</td>
				
				<td>
					<a href="?a=1&b=3" class="sala"> Engenho </a>
				</td>
				
				<td>
					<a href="?a=1&b=4" class="sala"> Despensa </a>
				</td>
				
				<td>
					<a href="?a=1&b=5" class="sala"> Gerir </a>
				</td>
		</tr>
		</table>
		
	<?php 
		if(isset($_GET['b'])){
			if($_GET['b'] == 1){
				//include("edificio_especial/engenho/informacoes.php");
			}
		}
	?>