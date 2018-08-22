
	<?php 

	?>
	
		<h3 style="background-color:rgb(200,200,200);color:white"> Minha Fazenda de Gado </h3>
		<table>
			<tr align='center'>
				<td>
					<a href="?a=3&b=1" class="sala"> Informações </a>
				</td>
				
				<td>
					<a href="?a=3&b=2" class="sala"> Capinzal </a>
				</td>
				
				<td>
					<a href="?a=3&b=3" class="sala"> Ordenha </a>
				</td>
				
				<td>
					<a href="?a=3&b=4" class="sala"> Matadouro </a>
				</td>
				
				<td>
					<a href="?a=3&b=5" class="sala"> Despensa </a>
				</td>
				
				<td>
					<a href="?a=3&b=6" class="sala"> Gerir </a>
				</td>
		</tr>
		</table>
		
	<?php 
		if(isset($_GET['b'])){
			if($_GET['b'] == 1){
				//include("edificio_especial/mina_ouro/informacoes.php");
			}
		}
	?>