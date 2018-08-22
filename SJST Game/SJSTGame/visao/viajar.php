
	<h2 class="titulo2">Viajar</h2>
	<table>
			<tr align='center'>
				<td>
					<a href="?a=10" class="sala"> Mapa </a>
				</td>
				
				<td>
					<a href="?a=10&b=2" class="sala"> Viagens Recentes </a>
				</td>
				
				<td>
					<a href="?a=10&b=3" class="sala"> Grupo </a>
				</td>
				
				<td>
					<a href="?a=10&b=4" class="sala"> Assaltar </a>
				</td>
		</tr>
		</table>
	
	
	<?php
		if(isset($_GET['b'])){
			if($_GET['b'] == 2){
				include("arredores/viajar/historico.php");
			}
			if($_GET['b'] == 3){
				include("arredores/viajar/grupo.php");
			}
			if($_GET['b'] == 4){
				include("arredores/viajar/assaltar.php");
			}
		}else{
			include("arredores/viajar/mapa_viajar.php");
		}
	?>