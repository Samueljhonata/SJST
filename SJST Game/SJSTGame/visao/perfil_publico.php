<!--<!DOCTYPE html>
<html>
	<head>
		<title>Jogo</title>
		<meta charset="UTF-8"/>
			<link rel="stylesheet" href="estilos/estilo.css"/>
	</head>

	<body>

	<map name = 'perfil_map'> 
			<area shape = 'rect' alt='parte 1' coords = '25,15, 230, 60' href='?a=1' title='Salão de Festas'/>
			<area shape = 'rect' alt='parte 2' coords = '245,15, 480, 60' href='?a=2' title='Salão de Festas'/>
			<area shape = 'rect' alt='parte 3' coords = '490,15, 690, 60' href='?a=3' title='Salão de Festas'/>
	</map>

<?php
	if(isset($_GET['a'])){
		if($_GET['a'] == 1) echo "<img src='perfil_publico1.png' usemap='#perfil_map'/>";
		if($_GET['a'] == 2) echo "<img src='perfil_publico2.png' usemap='#perfil_map'/>";
		if($_GET['a'] == 3) echo "<img src='perfil_publico3.png' usemap='#perfil_map'/>";
	}else{
		echo "<img src='perfil_publico1.png' usemap='#perfil_map'/>";
	}
?>-->
<?php
include "cima.php";
?>
<h2 class="titulo2">Perfil Público</h2>
<a class="menuCima">Informações Gerais</a>
<a class="menuCima">Conquistas</a>
<a class="menuCima">Sobre o Personagem</a>
<a class="menuCima">Sobre o Jogador</a>
<div class="row divPrincipal center-block">

</div>
<br>
</div>
<?php include "rodape.php"; ?>