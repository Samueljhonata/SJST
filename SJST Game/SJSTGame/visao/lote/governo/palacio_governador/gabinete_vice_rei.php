	<?php 

	?>
	
		<h3 style="background-color:rgb(150,150,150);color:white">Gabinete do Vice-Rei</h3>
		<table>
			<tr align="center">
				<td>
					<a href="?a=2&b=1" class="sala">  </a>
				</td>
				
				<td>
					<a href="?a=2&b=2" class="sala">  </a>
				</td>
				
				<td>
					<a href="camara_municipal.php?a=3&b=3" class="sala">  </a>
				</td>
			</tr>
		</table>
	
		<br>Administrativos:
		<br><a href="">Gerenciar Cargos Regionais</a>
		<br><a href="">Contratar Funcionários Públicos</a>
		<br><a href="">Gerenciar Projetos de Construções</a>
		<br><a href="">Gerenciar Minas</a>
		<br><a href="">Gerenciar os Portos</a>
		<br><a href="">Pedir Afastamento do Cargo</a>
		<br><a href="">Pedir Demissão do Governo</a>
		
		
		<br><br>Financeiros:
		<br><a href="">Definir Impostos Regionais</a>
		<br><a href="">Gerir o Cofre</a>
		<br><a href="">Os Mercados Inter-Municipais</a>
		<br><a href="">Atribuir Mandato</a>
		<br><a href="?a=2&casa_moeda">Casa da Moeda Real</a>
		<br><a href="">Fazer Doação</a>
		<br><a href="">Mandar Verba</a>
		
		<br><br>Legislativos
		<br><a href="">Ordenar Decreto</a>
		<br><a href="">Derrubar Decreto</a>
	
		<br><br>Judiciais
		<br><a href="">Entrar com pedido de Processo</a>
		<br><a href="">Ratificar/Nomear Juizes Municipais</a>
		<br><a href="">Ratificar/Nomear Promotores Municipais de Justiça</a>
		<br><a href="">Nomear Ouvidor-Mor</a>
		<br><a href="">Indicar Ouvidores</a>
		<br><a href="">Nomear Promotor Regional de Justiça</a>
		<br><a href="">Indicar Desembargadores Reais</a>
		
		
	<br>
		<?php
			
			if (isset($_GET['casa_moeda'])){
				
					include("palacio_vice_rei/casa_moeda_regional.php");
				
			}
		
		?>
	</div>