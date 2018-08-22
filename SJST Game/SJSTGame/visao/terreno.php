	<?php 
			include("cabecalho.php");
	?>
	<?php 

	?>
	<div align='center'>
		<h2 class="titulo2"> Fazenda Serra Verde</h2>
<div style="width: 1000px;height: 500px;">
	<div align="left" style="border:none;">
		<a href="?a=1" class="menuCima"> Informações</a>
		<a href="?a=2" class="menuCima"> Gerir Terras</a>
		<a href="?a=3" class="menuCima"> Despensa</a>
		<a href="?a=4" class="menuCima"> Trabalhar</a>
		<a href="pagina_principal.php?a=4&b=1" class="menuCima"> Mapa</a>
	</div>
		
		<?php 
			if(isset($_GET['a'])){
				if($_GET['a'] == 2){
					include("terreno/gerir_terras.php");
				}
				if($_GET['a'] == 3){
					include("despensa.php");
				}
				if($_GET['a'] == 4){
					include("terreno/trabalhar.php");
				}
				if($_GET['a'] == 6){
					include("terreno/gerir_terras.php");
				}
			}
	?>
	</div>
	<br>
<?php include("rodape.php"); ?>