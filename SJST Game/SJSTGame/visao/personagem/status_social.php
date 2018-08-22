<?php 

?>
<h3 class="titulo3"> Status Social </h3>
<div style="width:95%;height:400px;">
	<!--<a href="?a=8&b=1" class="menuCima"> Informações</a>
	<a href="?a=8&b=2" class="menuCima"> Classe</a>
	<a href="?a=8&b=3" class="menuCima"> Títulos Nobiliárquicos</a>-->

	<ul class="nav nav-tabs fundo2" style="font-size: 95%;">
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>"><a href="?a=8&b=1#p">Informações</a></li>
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>"><a href="?a=8&b=2#p">Classe</a></li>
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>"><a href="?a=8&b=3#p">Títulos Nobiliárquicos</a></li>
	</ul>
	<div style="border:none; width:99%;height:90%;">
		<?php 
			if(isset($_GET['b'])){
				switch($_GET['b']){
					case 1: include("personagem/status_social/status_social.php"); break;
					case 2: include("personagem/status_social/classe.php"); break;
					case 3: include("personagem/status_social/titulos.php"); break;
				}
			}else{
				include("personagem/status_social/status_social.php");
			}
		?>
	</div>
</div>