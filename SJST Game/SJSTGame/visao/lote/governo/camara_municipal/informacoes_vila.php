
	<?php 

	?>
	
		<h3 class="titulo3">Informações sobre <?php echo $nome_vila; ?></h3>
		<table>
		<a href="" class="sala"> Revoltar-se e tentar tomar o poder </a> &nbsp <a href="" class="sala"> Defender contra malfeitores </a> <br><br>
			
			<tr align="center">
				<td>
					<a href="camara_municipal.php?b=1" class="sala"> Informações Gerais </a>
				</td>
				
				<td>
					<a href="camara_municipal.php?a=1&b=2" class="sala"> Habitantes </a>
				</td>
				
				<td>
					<a href="camara_municipal.php?a=1&b=3" class="sala"> Leis e Decretos</a>
				</td>
				
				<td>
					<a href="camara_municipal.php?a=1&b=4" class="sala"> Museu</a>
				</td>
			</tr>
		</table>
	
		
	
	
		<?php
			if (isset($_GET['b'])){
				if ($_GET['b'] == 1){
					include("camara_municipal/informacoes_gerais_vila.php");
				}
				if ($_GET['b'] == 3){
					include("camara_municipal/informacoes/leis_e_decretos.php");
				}
				if ($_GET['b'] == 4){
					include("camara_municipal/informacoes/museu.php");
				}
				
				/*if ($_GET['a'] == 2){
					include("");
				}
				if ($_GET['a'] == 3){
					include("");
				}*/
			}
		?>
