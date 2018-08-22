
	<?php 

	?>
	
		<h3 style="background-color:rgb(200,200,200);color:white"> Lagar de Azeite </h3>
		<table>
			<tr align='center'>
				<td>
					<a href="?a=4&b=1" class="sala"> Informações </a>
				</td>
				
				<td>
					<a href="?a=4&b=2" class="sala"> Produzir Azeite </a>
				</td>
				
				<td>
					<a href="?a=4&b=3" class="sala"> Despensa </a>
				</td>
				
				<td>
					<a href="?a=4&b=4" class="sala"> Gerir </a>
				</td>
				
				<td>
					<a href="?a=4&b=5" class="sala"> Mapa </a>
				</td>
		</tr>
		</table>
		
	<?php 
		if(isset($_GET['b'])){
			if($_GET['b'] == 1){
				//include("oficinas/padaria/informacoes_padaria.php");
			}
			if($_GET['b'] == 2){
				//include("oficinas/padaria/cozinha_padaria.php");
			}
			if($_GET['b'] == 3){
				//include("oficinas/padaria/forno_padaria.php");
			}

		}
	?>