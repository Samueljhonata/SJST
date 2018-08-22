<?php 
	if (isset($_GET['a'])){
		
		switch($_GET['a']){
			/*case 1: include("lote///.php"); break;
			case 2: include("lote///.php"); break;
			case 3: include("lote///.php"); break;
			case 4: include("lote///.php"); break;
			case 5: include("lote///.php"); break;
			case 6: include("lote///.php"); break;*/
		}
			
	}else{
?>
		<h2 class="titulo2">Palácio do Governador de <?php echo $nome_privincia; ?></h2>
		<div style="background-image:url(imagens/portas.png); background-repeat: no-repeat;background-position: center top;" class="divPrincipal center-block text-center">
			 
			
				<a class="sala" href="" style="position: relative; left: -120px;top:100px; width:30%;"> 
					Salão Principal
				</a>
				
				<a class="sala" href="" style="position: relative; left: -150px;top:50px; width:30%;"> 
					Gabinete do Vice-Governador
				</a>
				<a class="sala" href="" style="position: relative; left: -150px;top:10px; width:30%;"> 
					Gabinete do Governador
				</a>
				
				<a class="sala" href="" style="position: relative; left: 130px;top:50px; width:30%;"> 
					Museu
				</a>
				<a class="sala" href="" style="position: relative; left: 130px;top:100px; width:30%;"> 
					 Gabinete do Secretário
				</a>
			</div>
	
<?php
	}	
?>
