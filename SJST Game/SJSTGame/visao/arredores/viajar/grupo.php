
	<?php 
		
	?>
	
		<h4 class="titulo4"> Meu Grupo de Viagens </h4> 
	<a href="?a=10&b=3&sim"> SIM </a> <a href="?a=10&b=3&nao"> NÃO </a><br><br>
	
		
	
			<?php
			
			if (isset($_GET['sim'])){
				include("grupo/gerir.php");
			}else{	
			
			if (isset($_GET['criar'])){
				include("grupo/criar_grupo.php");
			}else{
				echo "Você não é membro de nenhum Grupo Armado.<br>
					<a href='?a=10&b=3&criar'> Criar </a>
				<br><br>";	
			}
			}
		?>
