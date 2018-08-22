<h2 class="titulo2">Acampamento Militar - Exército ""</h2>
<a href="acre.php?id=9&tipo_ed=4&tipo_ed=8&ex=1"> (Faz parte) </a> ou <a href="acre.php?id=9&tipo_ed=4&tipo_ed=8"> NÃO faz parte </a>
<div style="width: 1000px;height: 500px;">
	<div align="left" style="border:none;">
		<a href="?a=1" class="menuCima"> Informações do Quartel</a>
		<?php 
			if(isset($_GET['ex'])){
				echo"
					<a href='?a=2' class='menuCima'> Caserna</a>
					<a href='?a=3' class='menuCima'> Campo de Treino</a>
					<a href='?a=4' class='menuCima'> Gerir</a>
				";
			}else{
				echo"<a href='?b=2' class='menuCima' style='color: red;'> Atacar </a>";
			}
		?>
	</div>
	
		
	
	
		<?php
		if(isset($_GET['a'])){
			if($_GET['a'] == 1){
				include("acre/quartel/informacoes.php");
			}
		}else{
			include("acre/quartel/informacoes.php");
		}
		?>
	</div>
