<?php

	if (isset($_GET['a'])){
		
		switch($_GET['a']){
			/*case 1: include("lote/igreja/seminario/salas_de_aula.php"); break;
			case 2: include("lote/igreja/seminario/biblioteca.php"); break;
			case 3: include("lote/igreja/seminario/sala_professores.php"); break;
			case 4: include("lote/igreja/seminario/sala_reitor.php"); break;
			case 5: include("lote/igreja/seminario/minha_area.php"); break;*/
		}
			
	}else{
?>
		<h2 class="titulo2">Hospital Municipal de <?php echo $nome_vila; ?></h2>
		<div style="background-image:url(imagens/portas.png); background-repeat: no-repeat;background-position: center top;" class="divPrincipal center-block text-center">
			 
			
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=1" style="position: relative; left: -210px;top:100px; width:30%;"> 
					Sala de Espera
				</a>
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=2" style="position: relative; left: -180px;top:50px; width:30%;"> 
					Leitos
				</a>
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=3" style="position: relative; left: -60px;top:10px; width:30%;"> 
					Sala de Consultas
				</a>
				
				
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=5" style="position: relative; left: 210px;top:50px; width:30%;"> 
					Sala do Diretor
				</a>
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=6" style="position: relative; left: 230px;top:100px; width:30%;"> 
					 Sala do Médico
				</a>
			</div>
	
<?php
	}	
?>

