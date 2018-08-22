
	<h2 class="titulo2">Palácio Real de Justiça</h2>
	<?php 
	if(isset($_GET['a'])){
		echo "<div style='width:1000px;height:500px;'>";
		switch($_GET['a']){
			case 1: include("lote/governo/praca_real/palacio_da_justica/gabinete_promotor.php"); break;
			case 2: include("lote/governo/praca_real/palacio_da_justica.php"); break;
			case 3: include("lote/governo/praca_real/palacio_da_justica.php"); break;
		}
		echo"</div>";
	}else{
?>
	<div style="width: 1000px;height: 500px;background-image:url(imagens/portas.png); background-repeat: no-repeat;background-position: center top;">			
		<a class="sala" href="?id=0&tipo_ed=2&tipo_con=9&ed=2&a=1" style="position: relative; left: -135px;top:100px; width:30%;"> 
			Gabinete do Promotor
		</a>
		<a class="sala" href="?id=0&tipo_ed=2&tipo_con=9&ed=2&a=2" style="position: relative; left: -160px;top:50px; width:30%;"> 
			Gabinete do Juiz 
		</a>
		<a class="sala" href="?id=0&tipo_ed=2&tipo_con=9&ed=2&a=3" style="position: relative; left: -85px;top:10px; width:30%;"> 
			Tribunal do Juri 
		</a>
		<a class="sala" href="?id=0&tipo_ed=2&tipo_con=9&ed=2&a=4" style="position: relative; left: -40px;top:10px; width:30%;"> 
			Gabinete do Juiz-Mor
		</a>
		<a class="sala" href="?id=0&tipo_ed=2&tipo_con=9&ed=2&a=5" style="position: relative; left: 70px;top:50px; width:30%;"> 
			Prisão
		</a>
		<a class="sala" href="?id=0&tipo_ed=2&tipo_con=9" style="position: relative; left: 120px;top:100px; width:30%;"> 
			Praça Real 
		</a>
	</div>
	<?php }?>