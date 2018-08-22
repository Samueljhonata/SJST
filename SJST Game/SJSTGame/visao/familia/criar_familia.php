
	<?php 

	?>
	
		<h2 class="titulo2">Criando uma Família</h2>
		<p>Preencha o formulário abaixo e depois envie-o para o Conselho Heráldico para que possam aprovar o seu pedido</p>
		
		<form>
			<table>
				<tr>
					<td>Sobrenome da Família: <input ></td>
				</tr>

				<tr>
					<td><b>Membros:</b> <br>
						Quantidade de Membros: 
						<select>
						<?php for($i=1; $i<=10; $i++) echo "<option> $i </option>"; ?>
						</select>
					<br>
						Nome Tipo Parentesco <br>
						<?php for($i=1; $i<=10; $i++){
							echo "<input type=''>
							<select>
								<option>Herdeiro</option>
								<option>Ancião</option>
								<option>Membro</option>
							</select>
							<br>
						"; }?>
						
					</td>
				</tr>
				
				<tr>
					<td>Árvore Genealógica da Família: <input type=""></td>
				</tr>
				
				<tr>
					<td>Taxa para criação:  <b>$5:000$00 réis </b></td>
				</tr>
				<tr>
					<td> <input type="submit" value="Enviar pedido"></td>
				</tr>
				
			</table>
		</form>
		
		