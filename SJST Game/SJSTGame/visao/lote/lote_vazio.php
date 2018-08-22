<h2 class="titulo2"> Lote Vazio </h2>
<?php 	if($venda == 1 ) include("lote/placa_venda.php"); ?>

<table>
	<tr align='center'>
		<td>
			<a href='?a=1&tipo_ed=0&tipo_con=$tipo_con&id=$id' class='sala'> Informações </a>
		</td>
				
		<td>
			<a href='?a=2&tipo_ed=0&tipo_con=$tipo_con&id=$id' class='sala'> Despensa </a>
		</td>
				
		<td>
			<a href='?a=3&tipo_ed=0&tipo_con=$tipo_con&id=$id' class='sala'> Gerir </a>
		</td>
				
	</tr>
</table>

<map name = "map"> 
	<area shape = "rect" alt="parte 1" coords = "330, 140, 420, 230" href="" title="Gerenciar"/> 
</map>
<div style="width: 1000px;height: 500px;">
	<img usemap="#map" style="width: 100%;height: 100%;" src="imagens/lote_venda.png"/>
</div>


<?php
	if(isset($_GET['a'])){
		switch($_GET['a']){
			case 1: include("lote/vazio/informacoes.php");break;
			case 2: include("despensa.php");break;
			case 3: include("lote/vazio/gerir.php");break;
		}
	}
?>		
