<?php 
	
?>
<h3 class="titulo3"> Quadro de Conquistas </h3>
<div align="center" style="height:400px; width: 95%;position:relative; top:0px;">
	<!--<a href="?a=6&b=1" class="menuCima"> Igreja</a>
	<a href="?a=6&b=2" class="menuCima"> Nobreza</a>
	<a href="?a=6&b=3" class="menuCima"> Burguesa</a>
	<a href="?a=6&b=4" class="menuCima"> Exército</a>
	<a href="?a=6&b=5" class="menuCima"> Diversas</a>-->

	<ul class="nav nav-tabs fundo2" style="font-size: 95%;">
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 1) echo "active"; ?>"><a href="?a=6&b=1#p">Igreja</a>	</li>
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 2) echo "active"; ?>"><a href="?a=6&b=2#p">Nobreza</a></li>
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 3) echo "active"; ?>"><a href="?a=6&b=3#p">Exército</a></li>
		<li class="<?php if (isset($_GET['b'])) if ($_GET['b'] == 4) echo "active"; ?>"><a href="?a=6&b=4#p">Diversas</a>
	</ul>

	<?php 
		if(isset($_GET['b'])){
			switch($_GET['b']){
				case 1: $conquistas = "Igreja";
					break;
				case 2: $conquistas = "Nobreza";
					break;
				case 3: $conquistas = "Exército";
					break;
				case 4: $conquistas = "Diversas";
					break;
			}
		}else{
			$conquistas = "Igreja";
		}
		include("personagem/conquistas/conquistas.php");
	?>
</div>