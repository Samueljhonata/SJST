<?php 
	
?>
<h3 class="titulo3"> Habilidades </h3>
<div style="width:95%;height:400px;">
	<!--<a href="?a=7&b=1" class="menuCima"> Atributos</a>
	<a href="?a=7&b=2" class="menuCima"> Ofícios</a>
	<a href="?a=7&b=3" class="menuCima"> Estudos</a>
	<a href="?a=7&b=1" class="menuCima"> Especiais</a>-->

	<ul class="nav nav-tabs fundo2" style="font-size: 95%;">
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>"><a href="?a=7&b=1#p">Atributos</a></li>
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>"><a href="?a=7&b=2#p">Ofícios</a></li>
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>"><a href="?a=7&b=3#p">Estudos</a></li>
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 4) echo "active"; ?>"><a href="?a=7&b=4#p">Especiais</a></li>
	</ul>
	<?php 
		if(isset($_GET['b'])){
			switch($_GET['b']){
				case 1:
					include ("personagem/habilidades/atributos.php");
					break;
				case 2:
					include ("personagem/habilidades/oficios.php");
					break;
				case 3:
					include ("personagem/habilidades/estudos.php");
					break;

			}
		}
	?>
</div>