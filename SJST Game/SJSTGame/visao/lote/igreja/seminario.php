<?php 
	if (isset($_GET['a'])){
		
		switch($_GET['a']){
			case 1: include("lote/igreja/seminario/salas_de_aula.php"); break;
			case 2: include("lote/igreja/seminario/biblioteca.php"); break;
			case 3: include("lote/igreja/seminario/sala_professores.php"); break;
			case 4: include("lote/igreja/seminario/sala_reitor.php"); break;
			case 5: include("lote/igreja/seminario/minha_area.php"); break;
		}
			
	}else{
?>
	<!--	<h2 class="titulo2">Seminário de <?php echo $nome_vila; ?></h2>
		<div style="width: 1000px;height: 500px;background-image:url(imagens/portas.png); background-repeat: no-repeat;background-position: center top;">
			<a href="?a=6" class="menuCima" > Capela do Seminário </a>
			 
			
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=1" style="position: relative; left: -195px;top:100px; width:30%;"> 
					Salas de Aula
				</a>
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=2" style="position: relative; left: -160px;top:50px; width:30%;"> 
					Biblioteca 
				</a>
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=3" style="position: relative; left: -60px;top:10px; width:30%;"> 
					Sala dos Professores
				</a>
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=4" style="position: relative; left: 0px;top:10px; width:30%;"> 
					Sala do Reitor
				</a>
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=5" style="position: relative; left: 100px;top:50px; width:30%;"> 
					Minha Área
				</a>
				<a class="sala" href="?id=0&tipo_ed=2&tipo_con=13&a=6" style="position: relative; left: 50px;top:100px; width:30%;"> 
					Aposentos dos Seminaristas 
				</a>
			</div>-->
	
<?php
	}	
?>

				
					

		
		<?php
			if (isset($_GET['a'])){
				if ($_GET['a'] == 1){
					include("seminario/salas_de_aula_seminario.php");
				}
				if ($_GET['a'] == 2){
					include("seminario/aposentos_seminaristas.php");
				}
				if ($_GET['a'] == 3){
					include("seminario/biblioteca.php");
				}
				if ($_GET['a'] == 4){
					include("seminario/sala_reitor_seminario.php");
				}
				if ($_GET['a'] == 5){
					include("seminario/sala_professores.php");
				}
				if ($_GET['a'] == 6){
					include("capela.php");
				}
				
			}
		
		?>
<?php $biblioteca = "Seminario"; ?>
<h2 class="titulo2">Seminario de <?php echo $nome_vila; ?></h2>

<div class="divPrincipal autoAjusta center-block" id="principal" style="background-image:url(imagens/portas.png); background-repeat: no-repeat;background-position: center top;">

		<a class="sala"
		   onclick="mostraEsconde(0, 'principal');mostraEsconde(1,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'aposentos');"
		   style="position: relative; left: -50px;top:100px; width:30%;">
			Salas de Aula
		</a>
		<a class="sala"
		   onclick="mostraEsconde(0, 'principal');mostraEsconde(0,'salasAula');mostraEsconde(1,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'aposentos');"
		   style="position: relative; left: -20px;top:50px; width:30%;">
			Biblioteca
		</a>
		<a class="sala"
		   onclick="mostraEsconde(0, 'principal');mostraEsconde(0,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(1,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'aposentos');"
		   style="position: relative; left: 70px;top:10px; width:30%;">
			Sala dos Professores
		</a>
		<a class="sala"
		   onclick="mostraEsconde(0, 'principal');mostraEsconde(0,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(1,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'aposentos');"
		   style="position: relative; left: 130px;top:10px; width:30%;">
			Sala do Reitor
		</a>
		<a class="sala"
		   onclick="mostraEsconde(0, 'principal');mostraEsconde(0,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(1,'minhaArea');mostraEsconde(0,'aposentos');"
		   style="position: relative; left: 240px;top:50px; width:30%;">
			Minha Área
		</a>
		<a class="sala"
		   onclick="mostraEsconde(0, 'principal');mostraEsconde(0,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(1,'aposentos');"
		   style="	position: relative; left: 220px;top:100px; width:30%;">
			Aposentos Seminaristas
		</a>
		<a href="?a=6" class="menuCima" style="position: relative; left: -400px; top: 460px"> Capela do Seminário </a>
</div>

<div class="divPrincipal autoAjusta center-block invisivel text-center" id="salasAula">
	<?php include("lote/governo/universidade/salas_de_aula.php"); ?>
</div>

<div class="divPrincipal autoAjusta center-block invisivel text-center" id="biblioteca">
	<?php include("lote/governo/universidade/biblioteca.php"); ?>
</div>

<div class="divPrincipal autoAjusta center-block invisivel text-center" id="salaProf">
	<?php include("lote/governo/universidade/sala_professores.php"); ?>
</div>

<div class="divPrincipal autoAjusta center-block invisivel text-center" id="salaReitor">
	<?php include("lote/governo/universidade/sala_reitor.php"); ?>
</div>

<div class="divPrincipal autoAjusta center-block invisivel text-center" id="minhaArea">
	<?php include("lote/governo/universidade/minha_area.php"); ?>
</div>

<div class="divPrincipal autoAjusta center-block invisivel" id="aposentos">
	<?php include("lote/igreja/seminario/aposentos_seminaristas.php"); ?>
</div>

<a class="sala" onClick="mostraEsconde(1,'principal');mostraEsconde(0,'salasAula');mostraEsconde(0,'biblioteca');mostraEsconde(0,'salaProf');mostraEsconde(0,'salaReitor');mostraEsconde(0,'minhaArea');mostraEsconde(0,'aposentos')" style="position: relative; left: 485px;top:-10px; width:30%;">
	Voltar
</a>

