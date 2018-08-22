
	<?php 

	?>
	
		<h3 class="titulo3">Dentro da Igreja de <?php echo $nome_vila; ?></h3>
		<table>
			
			<tr align="center">
				<td>
					<a href="?a=2&b=1" class="sala"> Salão Principal </a>
				</td>
				
				<td>
					<a href="?a=2&b=2" class="sala"> Pia Batismal </a>
				</td>
				
				<td>
					<a href="?a=2&b=3" class="sala"> Confessionário </a>
				</td>
				
				<td>
					<a href="?a=2&b=4" class="sala"> Festa de "São "</a>
				</td>
			</tr>
		</table>
	
		
	
	
		<?php
			if (isset($_GET['b'])){
				if ($_GET['b'] == 1){
					include("salao_principal.php");
				}
				if ($_GET['b'] == 2){
					include("pia_batismal.php");
				}
				if ($_GET['b'] == 3){
					include("confecionario.php");
				}
				if ($_GET['b'] == 4){
					include("festa.php");
				}
			}
		
		?>
	</div>