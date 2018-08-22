<?php 
	
?>

		<h2 class="titulo2">Companhia Comercial "NOME" - Sede</h2>
		<table>
			
			<tr align="center">
				<td>
					<a href="?tipo_ed=7&tipo_con=2&id=9&a=1" class="sala"> Informações</a>
				</td>
				
				<td>
					<a href="?tipo_ed=7&tipo_con=2&id=9&a=2" class="sala"> Membros </a>
				</td>
				
				<td>
					<a href="?tipo_ed=7&tipo_con=2&id=9&a=3" class="sala"> Escritório do Presidente </a>
				</td>
				
		</table>
		
	
			<?php
			if (isset($_GET['a'])){
				if ($_GET['a'] == 1){
					//include("cia_comercial/informacoes_cia.php");
				}
				if ($_GET['a'] == 2){
					//include("cia_comercial/patrimonio_cia.php");
				}
				if ($_GET['a'] == 3){
					//include("cia_comercial/contratos_trabalho_cia.php");
				}
				if ($_GET['a'] == 4){
					//include("cia_comercial/sala_de_reunioes_cia.php");
				}
				if ($_GET['a'] == 5){
					//include("cia_comercial/gerenciamento_cia.php");
				}
				
			}
		
		?>
		

