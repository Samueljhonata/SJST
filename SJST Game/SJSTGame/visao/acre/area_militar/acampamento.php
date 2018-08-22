	<?php 
			include("cabecalho.php");
	?>
	<div align='center'>
<a href="?ex=1"> SIM </a> <a href="?"> NÃO </a>
		<h2 class="titulo2">Quartel</h2>
		<table>	
			<tr align="center">
				<td>
					<a href="?a=1" class="sala"> Informações do Quartel </a>
				</td>
				
				<?php if(isset($_GET['ex'])){
					echo"
				<td>
					<a href='?a=2' class='sala'> Caserna </a>
				</td>
				
				<td>
					<a href='?a=3' class='sala'> Campo de Treinamento </a>
				</td>
				
				<td>
					<a href='?a=4' class='sala'> Gerir Quartel </a>
				</td>
				";
				}else{
				echo"
				<td>
					<a href='?a=5' class='sala' style='color: red;'> Invadir </a>
				</td>
			";
				}
			?>
			</tr>
		</table>
	
		
	
	
		<?php
		if(isset($_GET['a'])){
			if($_GET['a'] == 1){
				include("quartel/informacoes_quartel.php");
			}
		}else{
			include("quartel/informacoes_quartel.php");
		}
		?>
	</div>