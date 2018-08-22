<?php 
		include("cabecalho.php");
		
	?>
	<?php 

	?>
	<div align="center">
		<h2 class="titulo2">Famílias </h2>	

		<table>
			
			<tr align="center">
				<td>
					<a href="?a=1" class="sala"> Ranking das Famílias </a>
				</td>
				
				<td>
					<a href="?a=2" class="sala"> Todas as Famílias </a>
				</td>
				
				<td>
					<a href="minha_familia.php" class="sala"> Minha Família</a>
				</td>
				
			</tr>
		</table>
		
		<?php
			if (isset($_GET['a'])){
				if ($_GET['a'] == 1){
					//include("familia/informacoes_familia.php");
				}
				if ($_GET['a'] == 2){
					//include("familia/patrimonio_familia.php");
				}
				
			}
		?>
	</div>