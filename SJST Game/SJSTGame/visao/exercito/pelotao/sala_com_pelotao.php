<?php 

?>
<h3 class="titulo2">Sala do Comandante do Pelotão "" </h3>
<div align="left" style="border:none;">
	<a class="menuCima" onClick="mostraEsconde(1,'info');mostraEsconde(0,'orgacizacao');mostraEsconde(0,'subordinados');mostraEsconde(0,'pedidos');mostraEsconde(0,'inventario');" > Informações Pelotão</a>
	
	<a class="menuCima" onClick="mostraEsconde(1,'orgacizacao');mostraEsconde(0,'info');mostraEsconde(0,'subordinados');mostraEsconde(0,'pedidos');mostraEsconde(0,'inventario');" > Organização e Tática</a>
	
	<a class="menuCima" onClick="mostraEsconde(1,'subordinados');mostraEsconde(0,'info');mostraEsconde(0,'orgacizacao');mostraEsconde(0,'pedidos');mostraEsconde(0,'inventario');" > Subordinados</a>
	
	<a class="menuCima" onClick="mostraEsconde(1,'pedidos');mostraEsconde(0,'info');mostraEsconde(0,'orgacizacao');mostraEsconde(0,'subordinados');mostraEsconde(0,'inventario');" > Novos Recrutas</a>
	
	<a class="menuCima" onClick="mostraEsconde(0,'info');mostraEsconde(0,'orgacizacao');mostraEsconde(0,'subordinados');mostraEsconde(0,'pedidos');mostraEsconde(1,'inventario');" > Inventário do Pelotão </a>
</div>		
		
<div id="info" style="display:block;border:none;">
	<?php include("exercito/informacao_unidade.php"); ?>
</div>

<div id="orgacizacao" style="display:none;border:none;" class="">
	<?php include("exercito/organizacao.php"); ?>
</div>

<div id="subordinados" style="display:none;border:none;">
	<?php include("exercito/subordinados.php"); ?>
</div>

<div id="pedidos" style="display:none;border:none;">
	<?php include("exercito/pedidos_ingresso.php"); ?>
</div>

<div id="inventario" style="display:none;border:none;">
	<?php include("inventario.php"); ?>
</div>