<?php
	include("cabecalho.php");
?>
		
<div align='center'>
		<h3 class="titulo3">Capela</h3>
		<table>	
			<tr align="center">
				<td>
					<a href="?a=6&b=1" class="sala"> Informações sobre a Igreja </a>
				</td>
				
				<td>
					<a href="?a=6&b=2" class="sala"> Dentro da Capela</a>
				</td>
				
				<td>
					<a href="?a=6&b=3" class="sala"> Sacristia </a>
				</td>
				
				<td>
					<a href="?a=6&b=4" class="sala"> Gabinete do Proprietário </a>
				</td>
				
		</table>
		<?php 
			if (isset($_GET['b'])){
				if ($_GET['b'] == 1){
					include("capela/informacoes_igreja.php");
				}
				if ($_GET['b'] == 2){
					include("capela/dentro_capela.php");
				}
				if ($_GET['b'] == 3){
					include("capela/sacristia.php");
				}
				if ($_GET['b'] == 4){
					include("capela/gabinete_proprietario.php");
				}
			}
		?>
	