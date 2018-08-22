	<?php 

	?>
	
		<h3 style="background-color:rgb(150,150,150);color:white">Gabinete do 1° Ministro</h3>
		<table>
			<tr align="center">
				<td>
					<a href="?a=2&b=1" class="sala"> Administrativos </a>
				</td>
				
				<td>
					<a href="?a=2&b=2" class="sala"> Financeiros </a>
				</td>
				
				<td>
					<a href="?a=2&b=3" class="sala"> Legislativos </a>
				</td>
				
				<td>
					<a href="?a=2&b=4" class="sala"> Judiciais </a>
				</td>
			</tr>
		</table>
	<?php if(isset($_GET['b'])){
		if($_GET['b'] == 1){?>
		<br>Administrativos:
		<br><a href="">Gerenciar os Cargos do Reino</a>
		<br><a href="">Contratar Funcionários Públicos Reais</a>
		<br><a href="">Gerenciar Projetos de Construções</a>
		<br><a href="">Gerenciar os Portos</a>
		<br><a href="">Gerenciar Diplomacias</a>
		<br><a href="">Pedir Afastamento do Cargo</a>
		<br><a href="">Pedir Demissão do Governo</a>
		
	<?php }if($_GET['b'] == 2){?>	
		<br><br>Financeiros:
		<br><a href="">Definir Impostos Reais</a>
		<br><a href="">Gerir o Tesouro Real</a>
		<br><a class="acao_gabinete" href="?a=2&casa_moeda=1">Casa da Moeda Real</a>
		<br><a href="">Relatórios</a>
		<br><a href="">Atribuir Mandato Real</a>
		<br><a href="">Fazer Doação</a>
		<br><a href="">Atribuir Verba</a>
		<br><a href="">Gerir Cofre do Banco de Portugal</a>
	<?php }if($_GET['b'] == 3){?>	
		<br><br>Legislativos
		<br><a href="">Ordenar Decreto</a>
		<br><a href="">Derrubar Decreto</a>
	<?php }if($_GET['b'] == 4){?>
		<br><br>Judiciais
		<br><a href="">Entrar com pedido de Processo</a>
		<br><a href="">Nomear Chanceler-Mor</a>
		<br><a href="">Indicar Desembargadores Reais</a>
		<br><a href="">Indicar Promotor Real de Justiça</a>
		<?php }}?>	
		<?php
			if (isset($_GET['casa_moeda'])){
				
					include("casa_moeda.php");
				
			}
			/*if (isset($_GET['b'])){
				if ($_GET['b'] == 1){
					echo"
					<table>
						
						<tr align='center'>
							<td colspan='2'>
								Informações sobre o Desembargo do Paço 
							</td>
						</tr>
						<tr>
							<td>
								Chanceler-Mor: 
							</td>
							<td>
								Nome
							</td>
						</tr>
						<tr>
							<td>
								Corpo de Juízes: 
							</td>
							<td>
								Nome
							</td>
						</tr>
					</table>
					";
				}
				if ($_GET['a'] == 2){
					include("");
				}
				if ($_GET['a'] == 3){
					include("");
				}
			}*/
		
		?>
	<br><br>	
	</div>