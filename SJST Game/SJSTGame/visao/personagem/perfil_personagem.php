<?php
$perfil = $personagemPrincipal->getPerfil();
?>
<h3 class="titulo3"> Meu Perfil </h3>
<div style="width:95%;height:400px;">
	<ul id="menu" class="nav nav-tabs fundo2" style="font-size: 95%;">
		<li class="<?php if(isset($_GET['b']))if($_GET['b'] == 1)echo"active";?>"><a href="?a=1&b=1#p">Informações</a></li>
		<li class="<?php if(isset($_GET['b']))if($_GET['b'] == 2)echo"active";?>"><a href="?a=1&b=2#p">Amigos</a></li>
		<li class="<?php if(isset($_GET['b']))if($_GET['b'] == 3)echo"active";?>"><a href="?a=1&b=3#p">Minha Religião</a></li>
		<li class="<?php if(isset($_GET['b']))if($_GET['b'] == 4)echo"active";?>"><a href="?a=1&b=4#p">Editar Perfil</a></li>
	</ul>

	<div class="autoAjusta">
	<?php 
		if(isset($_GET['b'])){
			if($_GET['b'] == 1){
				include ("perfil/informacoes_personagem.php");
			}
			if($_GET['b'] == 2){
				include ("perfil/amigos.php");
			}
			if($_GET['b'] == 3){
				include ("perfil/minha_religiao.php");
			}
		}else{
			include ("perfil/informacoes_personagem.php");
		}
	?>
	</div>

</div>