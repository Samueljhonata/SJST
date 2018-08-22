
	<?php 

	?>
	
		<h3 style="background-color:rgb(200,200,200);color:white"> Minha Mina </h3>
		<table>
			<tr align='center'>
				<td>
					<a href="?a=2&b=1" class="sala"> Informações </a>
				</td>
				
				<td>
					<a href="?a=2&b=2" class="sala"> Extrair Ouro </a>
				</td>
				
				<td>
					<a href="?a=2&b=3" class="sala"> Despensa </a>
				</td>
				
				<td>
					<a href="?a=2&b=4" class="sala"> Gerir </a>
				</td>
		</tr>
		</table>
		
	<?php 
		if(isset($_GET['b'])){
			if($_GET['b'] == 1){
				include("edificio_especial/mina_ouro/informacoes.php");
			}
		}
	?>