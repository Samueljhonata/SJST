
	<?php 

	?>
	
		<h4 class="titulo4"> Minha Conta</h4>
		<table>
			
			<tr align="center">		
				<td>
					<a href="#a" class="sala"> Gerenciar conta</a>
				</td>
				
				<td>
					<a href="?a=2&b=2" class="sala"> Pedir Empréstimo</a>
				</td>
				
				<td>
					<a href="?a=2&b=3" class="sala"> Fazer Hipoteca</a>
				</td>
				
				<td>
					<a href="?a=2&b=3" class="sala"> Penhorar bem</a>
				</td>
				
				<td>
					<a href="?a=2&b=4" class="sala"> Histórico </a>
				</td>
						
			</tr>
		</table>
		<h3>
			Possuis <b><?= $conta->getSaldo()[0]."$".$conta->getSaldo()[1];?></b> réis em sua conta
		</h3>
		
		
		<table>
			<tr align="center">
				<td class="titulo">
					<b> Depositar </b>
				</td>
				<td class="titulo">
					<b> Sacar </b>
				</td>
			<tr>
				<td>
					<input type="number" style="width: 100px;" /> réis
					<input type="submit" value="Depositar" /> 
				</td>
				
				<td>
					<input type="number" style="width: 100px;" /> réis
					<input type="submit" value="Sacar" /> 
				</td>
				
			</tr>
		</table>
	
		<br>
		
	
	
		<?php
			/*if (isset($_GET['b'])){
				if ($_GET['b'] == 1){
				}
				if ($_GET['a'] == 2){
					include("");
				}
				if ($_GET['a'] == 3){
					include("");
				}
			}*/
		
		?>
	</div>