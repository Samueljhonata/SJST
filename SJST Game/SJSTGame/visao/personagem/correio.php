<?php 
	
?>
<h3 class="titulo3"> Caixa de Correio </h3>
<div style="width:95%;height:400px;">
	<!--<a href="?a=2&b=1" class="menuCima"> Caixa de Entrada</a>
	<a href="?a=2&b=2" class="menuCima"> Caixa de Saída</a>
	<a href="?a=2&b=3" class="menuCima"> Escrever Mensagem</a>
	<a href="?a=2&b=4" class="menuCima"> Correspondência</a>-->

	<ul class="nav nav-tabs fundo2" style="font-size: 95%;">
		<li class="<?php if(isset($_GET['b']))if($_GET['b'] == 1)echo"active";?>"><a href="?a=2&b=1#p">Caixa de Entrada</a></li>
		<li class="<?php if(isset($_GET['b']))if($_GET['b'] == 2)echo"active";?>"><a href="?a=2&b=2#p">Caixa de Saída</a></li>
		<li class="<?php if(isset($_GET['b']))if($_GET['b'] == 3)echo"active";?>"><a href="?a=2&b=3#p">Escrever Mensagem</a></li>
		<li class="<?php if(isset($_GET['b']))if($_GET['b'] == 4)echo"active";?>"><a href="?a=2&b=4#p">Correspondência</a></li>
	</ul>

	<div style="border:none; width:99%;height:90%;">

	<?php 
		if(isset($_GET['b'])){
			if($_GET['b'] == 1){
				include("correio/entrada.php");
			}
			if($_GET['b'] == 2){
				include("correio/saida.php");
			}
			if($_GET['b'] == 3){
				include("correio/escrever.php");
			}
			if($_GET['b'] == 4){
				include("correio/importante.php");
			}
		}else{
			include("correio/entrada.php");
		}
	?>
	</div>
</div>
