<?php 
	switch($_GET['ed']){
			case 1: $tipo = "Ouro"; break;
	}
	
?>
		<h2 class="titulo2">Mina de <?php echo $tipo; ?></h2>
		
			<br>
			<table>
				<tr align="center">
					<td rowspan="6" align="center">
						<img src="imagens/mina.png" />
					</td>
					
				</tr>
				<tr align="center">
					<td>
						<b>Tempo</b>
					</td>
					<td>
						<b>Salário</b>
					</td>
					<td>
						<b>Trabalhar</b>
					</td>
				</tr>
				
				<tr align="center">
					<td>
						2 Horas
					</td>
					<td>
						Rs <b>300</b>
					</td>
					<td>
						<input type="submit" value="Trabalhar" />
					</td>
				</tr>
				
				<tr align="center">
					<td>
						5 Horas
					</td>
					<td>
						Rs <b>600</b>
					</td>
					<td>
						<input type="submit" value="Trabalhar" />
					</td>
				</tr>
				
				<tr align="center">
					<td>
						8 Horas
					</td>
					<td>
						Rs <b>1$000</b>
					</td>
					<td>
						<input type="submit" value="Trabalhar" />
					</td>
				</tr>
				
				<tr align="center">
					<td>
						12 Horas
					</td>
					<td>
						Rs <b>1$400</b>
					</td>
					<td>
						<input type="submit" value="Trabalhar" />
					</td>
				</tr>
			</table>

	