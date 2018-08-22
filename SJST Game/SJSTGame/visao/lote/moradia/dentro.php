<?php 
	$tipo_moradia = "Casa";
?>
<h2 class="titulo2"><?php echo $tipo_moradia; ?></h2>
<?php
	if (isset($_GET['a'])){
		echo"<div style='width: 1000px;height: 500px;'>";
		switch($_GET['a']){
			case 1: include("lote/moradia/gerir.php"); break;
			case 2: include("lote/moradia/quarto.php"); break;
			case 3: include("cozinha.php");break;
			case 4: include("lote/moradia/gerir.php");break;
		}
		echo "</div>";	
	}else{
?>
		
		<div style="width: 1000px;height: 500px;background-image:url(imagens/portas.png); background-repeat: no-repeat;background-position: center top;">				
			<a href="?id=0&tipo_ed=3&ed&a=1" class="menuCima" style="position: relative; left: -195px;"> Gerir</a> 
				
			<a class="sala" href="?id=0&tipo_ed=3&ed=1&a=2" style="position: relative; left: -280px;top:100px; width:30%;"> 
				Quarto
			</a>
			<a class="sala" href="?id=0&tipo_ed=3&ed=1&a=2" style="position: relative; left: -210px;top:50px; width:30%;"> 
				Quarto 
			</a>
			<a class="sala" href="?id=0&tipo_ed=3&ed=1&a=3" style="position: relative; left: -70px;top:10px; width:30%;"> 
				Cozinha
			</a>
			<a class="sala" href="?id=0&tipo_ed=3&ed=1&a=4" style="position: relative; left: 35px;top:10px; width:30%;"> 
				Sala de Estar
			</a>
			<a class="sala" href="?id=0&tipo_ed=3&ed=1&a=2" style="position: relative; left: 160px;top:50px; width:30%;"> 
				Quarto
			</a>
			<a class="sala" href="?id=0&tipo_ed=3&ed=1&a=2" style="position: relative; left: 220px;top:100px; width:30%;"> 
				Quarto 
			</a>
			<br><a href="lote.php?id=9&tipo_ed=3&tipo_con=1" class="sala" style="position:relative; top: 470px;left: 380px;">Sair</a>
		</div>
	
<?php
	}	
?>