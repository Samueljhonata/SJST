
	<?php 

	?>
	
		<!--<h3 style="background-color:rgb(150,150,150);color:white"> Padaria </h3>
		<table>
			<tr align='center'>
				<td>
					<form>
						<a href="?a=1&b=1" class="sala"> Informações </a>
					</form>
				</td>
				
				<td>
					<a href="?a=1&b=2" class="sala"> Produzir Pães</a>
				</td>
								
				<td>
					<a href="?a=1&b=3" class="sala"> Despensa </a>
				</td>
				
				<td>
					<a href="?a=1&b=4" class="sala"> Gerir </a>
				</td>
				
				<td>
					<a href="?a=1&b=5" class="sala"> Mapa </a>
				</td>
		</tr>
		</table>-->
		
	<?php 
		if(isset($_GET['a'])){
			if($_GET['a'] == 1){
				include("lote/oficina/padaria/informacoes_padaria.php");
			}
			if($_GET['a'] == 2){
				include("lote/oficina/padaria/produzir.php");
			}
			if($_GET['a'] == 3){
				include("despensa.php");
			}
			if($_GET['a'] == 4){
				include("oficinas/padaria/gerir.php");
			}

		}
	?>