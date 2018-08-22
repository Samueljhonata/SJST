<h2 class="titulo2">Área Militar</h2>

	<?php
		if(isset($_GET['a'])){
			echo "<div style='width: 1000px;height: 500px;'>";
			switch($_GET['a']){
				case 1: include("acre/area_militar/quarteis.php"); break;
				case 2: include("acre/area_militar/acampamentos.php"); break;
				case 3: include("acre/area_militar/campo_batalha.php");	 break;	
			}
			echo "</div>";
		}else{
	?>
		<div style="width: 1000px;height: 500px;background-image:url(imagens/area_militar.png); background-repeat: no-repeat;background-position: center top;">
			<a href="?id=9&tipo_ed=4&a=1" class="sala" style="position: relative; top: 30px; left: 100px;"> Quartéis</a>
			<a href="?id=9&tipo_ed=4&a=2" class="sala" style="position: relative; top: 200px; left: 200px;"> Acampamentos Militares</a>
			<a href="?id=9&tipo_ed=4&a=3" class="sala" style="position: relative; top: 400px; left: -300px;"> Campo de Batalha</a>
		</div>
		<?php }?>