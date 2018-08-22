
	<h2 class="titulo2">Zona Rural de Lisboa</h2>

<?php 
	if (isset($_GET['b'])){
		include ("arredores/mapa_arredores.php");
	}else{?>
		<div class="divPrincipal center-block" style="background-image:url(imagens/mapa_arredores.png); background-repeat: no-repeat;background-position: center top;">
			<br><a href='acre.php?id=9&tipo_ed=1'style="padding: 50px;color: black;font-size: 18pt;position: relative; left:-350px;top: 5px;"> <b>Porto</b></a>
			<br><a href='acre.php?id=9&tipo_ed=2'style="padding: 50px;color: black;font-size: 18pt;position: relative; left:-350px;top: 55px;"> <b>Floresta</b></a>
			<br><a href='acre.php?id=9&tipo_ed=4'style="padding: 20px;color: black;font-size: 18pt;position: relative; left:0px;top: -25px;"> <b>Área Militar</b></a>
			<br><a href=''><img src='imagens/lote_governo.png' title='' /></a>
			<br>
			<a href='acre.php?id=9&tipo_ed=3'style="padding: 50px;color: black;font-size: 18pt;position: relative; left:-200px;top: -25px;"> <b>Minas</b></a>
			<br>
			<a href='acre.php?id=9&tipo_ed=6'style="padding: 50px;color: black;font-size: 18pt;position: relative; left:300px;top: 100px;"> <b>Meus Edifícios Especiais</b></a>
			<br><a href='terreno.php'style="padding: 20px;color: black;font-size: 18pt;position: relative; left:-350px;top:100px;"> <b>Meu Terreno</b></a>
			<br><a href='?a=10'style="padding: 20px;color: black;font-size: 18pt;position: relative; left:450px;top:-300px;"> <b>Viajar</b></a>
			<a href='pagina_principal.php?a=4&b=1'style="padding: 50px;color: black;font-size: 18pt;position: relative; left:-90px;top: 100px;"> <b>Terrenos Rurais</b></a>

		</div>

		<br>
		
	<?php } ?>